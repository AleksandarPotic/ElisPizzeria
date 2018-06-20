<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->category) {
            $products = Product::with('category')->whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            $category = Category::where('slug', request()->category)->first();
        }
        return view('admin.products.index',compact('products','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('slug', request()->category)->first();
        return view('admin.products.new',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->small = $request->small;
        $product->medium = $request->medium;
        $product->large = $request->large;
        $product->extra_large = $request->extra_large;
        $product->price = $request->price;
        $product->platter = $request->platter;
        $product->extra_sauce = $request->extra_sauce;
        if ($request->new) {
            $product->new = 1;
        } else {
            $product->new = 0;
        }

        $product->save();

        return redirect()->back()->with('alert_session','Product successfully added!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->first();

        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::where('id',$id)->first();

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->small = $request->small;
        $product->medium = $request->medium;
        $product->large = $request->large;
        $product->extra_large = $request->extra_large;
        $product->price = $request->price;
        $product->platter = $request->platter;
        $product->extra_sauce = $request->extra_sauce;
        if ($request->new) {
            $product->new = 1;
        } else {
            $product->new = 0;
        }

        $product->save();

        return redirect()->back()->with('alert_session','Product successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->delete();

        return redirect()->back()->with('alert_session','Product successfully deleted!');
    }
}
