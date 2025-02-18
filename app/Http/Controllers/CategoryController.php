<?php

namespace App\Http\Controllers;

use App\Http\Request\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create() {
        return view('categories.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $validate = $request->validated();
        category::query()->create($validate);
        return redirect()->route('categories.index');
    }

    public function show(Category $category){
        return view('categories.show',[
            'category'=>$category,
        ]);
    }
    public function edit(Category $category){
        return view('categories.edit',[
            'category'=>$category,
        ]);
    }

    public function update(CategoryRequest $request, Category $category): \Illuminate\Http\RedirectResponse
    {
        $validate = $request->validated();
        $category->update($validate);

        return redirect()->route('categories.index');
    }


    public function destroy(category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('categories.index');
    }

}
