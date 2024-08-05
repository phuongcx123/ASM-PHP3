<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\HasTag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    const  PATH_VIEW = 'admin.posts.' ;
    const  PATH_UPLOAD = 'posts';

    public function index()
    {
        $data = Post::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }


    public function create()
    {
        $cate = Category::all();
        $tag = HasTag::all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('cate', 'tag'));
    }

    public function store(PostRequest $request)
    {
        $dataPost = $request->all();
        $dataPost['slug'] = Str::slug($dataPost['title']) . '-' . Str::random(5);
        $dataPost['user_id'] = Auth::id();
        $tag = $request->tag;

        try {
            DB::beginTransaction();

            if (!empty($dataPost['thumbnail_img'])) {
                $dataPost['thumbnail_img'] = Storage::put(self::PATH_UPLOAD, $dataPost['thumbnail_img']);
            }

            $post = Post::create($dataPost);
            foreach ($tag as $item) {
                $post->tags()->attach($item);
            }

            DB::commit();

            return redirect()->route('admin.posts.index')->with('success', 'Add Post Successfully');
        } catch (\Exception $e) {

            if (!empty($dataPost['thumbnail_img'])) {
                Storage::delete($dataPost['thumbnail_img']);
            }

            Log::error($e->getMessage());

            DB::rollBack();

            return abort(500);
        }
    }


    public function show(Post $post)
    {
        $data = $post;
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }


    public function edit(Post $post)
    {
        $cate = Category::all();
        $tag = HasTag::all();
        $data = $post->with('tags')->first();

        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'cate', 'tag'));
    }


    public function update(Request $request, Post $post)
    {


        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',

        ]);
        $data = $request->all();
        $tag = $request->tag;
//        dd($data) ;
        try {
            DB::beginTransaction();


            $data['is_status'] ??= 0;
            $data['is_hot'] ??= 0;
            $data['is_trend'] ??= 0;
            if ($request->hasFile('thumbnail_img')) {
                $data['thumbnail_img'] = Storage::put(self::PATH_UPLOAD, $request->file('thumbnail_img'));
                Storage::delete($post->thumbnail_img);
            }
            $post->update($data);
            $post->tags()->sync($tag);
            DB::commit();
            return back()->with('success', 'Edit post name success');

        } catch (\Exception $e) {
            DB::rollBack();
            Storage::delete($request->thumbnail_img);
        }
    }


    public function destroy(Post $post)
    {
        try {
            DB::beginTransaction();
            Storage::delete($post->thumbnail_img);
            $post->tags()->sync([]);
            $post->delete();
            DB::commit();
            return redirect()->route('admin.posts.index')->with('success', 'edit post successful');

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

    }
}
