<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::where('status','1')->get();

        return view('admin.category.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::whereNull('category_id')->get();
        return view('admin.category.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = array(
            'name' => $request->category_name,
            'category_id' => $request->category_id,
        );
        // dd($data);

        $create = Category::create($data);
        return redirect()->route('category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Category $category)
    {
        //
        $id=$request->id;
        $categories=Category::whereNull('category_id')->get();
        $category =Category::find($id);
        return view('admin.category.edit', compact('category', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $id=$request->id;
        $data = array(
            'name' => $request->category_name,
            'category_id' => $request->category_id,
        );
        $category = Category::find($id);
        $category->update($data);
        return redirect()->route('category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        //
        $id = $request->id;
        $category = Category::find($id);
        $category->delete();
        return response()->json('success');
    }
}
