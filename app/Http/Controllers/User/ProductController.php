<?php

namespace App\Http\Controllers\User;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->category) {
            $products = Product::with('category')->whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            $category = Category::where('slug', request()->category)->first();
        }

        return view('user.menu-items',compact('products','category'));
    }
}
