<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products  = Product::orderBy('name' ,'asc')->with('category')->get();
        return inertia('Product/Index', [
            'products' => $products
        ]);
    }

    public function create(){
        return inertia('Product/Create');
    }

    public function edit(Product $product){
        return inertia('Product/Edit');
    }

    public function destroy(Product $product) {
        $product->delete();

        return redirect('/products')->with('message', 'Product successfully deleted');;
    }
}
