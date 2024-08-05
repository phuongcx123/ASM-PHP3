<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HasTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const  PATH_VIEW = 'admin.tag.';

    public function index()
    {
        $data = HasTag::all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Throwable
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validate([
                'name' => 'required|unique:has_tags,name',
            ]);
            HasTag::query()->create($data);
            DB::commit();
            return redirect()->route('admin.tags.index')->with('success', 'add tags successful');

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(HasTag $tag)
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasTag $tag)
    {
                $data = $tag  ;
             return view(self::PATH_VIEW . __FUNCTION__ , ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasTag $tag)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'name' => 'required|unique:has_tags,name',
            ]);
            $data = $request->all();
            $tag->update($data);
            DB::commit();
            return redirect()->back()->with('success', 'edit tags successful');

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasTag $tag)
    {
        try {
            DB::beginTransaction();

            $tag -> posts()->sync([]);

            DB::commit();
            return redirect()->back()->with('success', 'delete tags successful');

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
