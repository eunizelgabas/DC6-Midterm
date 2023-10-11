<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::orderBy('name' , 'asc')->get();
        return inertia('Category/Index',[
           'categories' => $categories 
        ]);
    }
}
