<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class CategoryController extends Controller
{
    const  PATH_VIEW = 'admin.category.';
    const  PATH_UPLOAD = 'categories';

    public function index()
    {
        $data = Category::all(

        );

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'thumbnail_img' => 'required|image|mimes:jpeg,png,jpg,svg,web|max:2048',
        ]);
        $data = $request->all();
        try {
            DB::beginTransaction();

            $data['slug'] = Str::slug($data['name']);
            if ($data['thumbnail_img']) {
                $data['thumbnail_img'] = Storage::put(self::PATH_UPLOAD , $data['thumbnail_img']);
            }
            Category::query()->create($data);
            DB::commit();
            return redirect()->route('admin.categories.index')->with('success' , 'Add category name success ');
        } catch (\Exception $e) {
            DB::rollBack();
            Storage::disk('public')->delete($data['thumbnail_img']);
        }
    }

    public function show(Category $category)
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function edit(Category $category)
    {
        $data = $category;

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function update(Request $request, Category $category)
    {

        try {
            DB::beginTransaction();
            $request->validate([
                'name' => 'required'
            ]);

            $data = $request->all();
            $data['is_status'] ??= 0  ;
            if ($request->hasFile('thumbnail_img')) {
                $data['thumbnail_img'] = Storage::put(self::PATH_UPLOAD, $request->file('thumbnail_img'));
                if(!empty($category->thumbnail_img) && Storage::exists($category->thumbnail_img)) {
                    Storage::delete($category->thumbnail_img) ;
                }

            }
            $category->update($data);
            DB::commit();
            return back()->with('success', 'Edit category name success');

        } catch (\Exception $e) {
            DB::rollBack();
            Storage::delete($request -> thumbnail_img ) ;
        }
    }

    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();
            $category->delete();
            $category->posts()->delete();
    DB::commit();
            return redirect()->route('admin.categories.index') ->with('success' , 'DELETE category name success ');
        } catch (\Exception $e){
            DB::rollBack();
        }
    }


}
