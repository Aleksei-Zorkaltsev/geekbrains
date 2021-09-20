<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     * \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create($request->only('title', 'description'));

        if($category){
            return redirect()->route('admin.categories')->with('success', 'add category success');
        }

        return back()->with('error', 'add category fail')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $category
     * @return
     * \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     * \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //$category->title = $request->input('title')
        $category->fill(
            $request->only('title', 'description')
        )->save();

        if($category){
            return redirect()
                ->route('admin.categories')
                ->with('success', 'update category success');
        }
        return back()
            ->with('error', 'update category fail')
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return
     * \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
