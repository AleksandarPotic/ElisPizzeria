<?php

namespace App\Http\Controllers\Admin;

use App\Model\Special;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialController extends Controller
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
        $specials = Special::all();
        return view('admin.specials.index',compact('specials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specials.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $special = new Special();

        $special->name = $request->name;
        $special->description = $request->description;
        $special->price = $request->price;
        $special->price2 = $request->price2;

        $special->save();

        return redirect()->back()->with('alert_session','Special successfully added!');
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
        $special = Special::where('id',$id)->first();

        return view('admin.specials.edit',compact('special'));
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
        $special = Special::where('id',$id)->first();

        $special->name = $request->name;
        $special->description = $request->description;
        $special->price = $request->price;
        $special->price2 = $request->price2;

        $special->save();

        return redirect()->back()->with('alert_session','Special successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $special = Special::where('id',$id)->delete();

        return redirect()->back()->with('alert_session','Special successfully deleted!');
    }
}
