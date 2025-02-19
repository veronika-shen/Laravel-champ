<?php

namespace App\Http\Controllers;

use App\Http\Request\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Queries\ProductQuery;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProductsController extends Controller
{
    public function index(Request $request, ProductQuery $productQuery) {
        $products = $productQuery->filter($request->get('category_id'));

        return view('products.index', [
            'products' => $products,
            'categories' => Category::all(),
        ]);
    }

    public function create() {
        return view('products.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $validate = $request->validated();
        Product::query()->create($validate);
        return redirect()->route('products.index');
    }

    public function show(Product $product){
        return view('products.show',[
            'product'=>$product,
        ]);
    }
    public function edit(Product $product){
        return view('products.edit',[
            'product'=>$product,
            'categories' => Category::all(),
        ]);
    }

    public function update(ProductRequest $request, Product $product): \Illuminate\Http\RedirectResponse
    {
        $validate = $request->validated();
        $product->update($validate);

        return redirect()->route('products.index');
    }


    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
