<?php

namespace App\Http\Controllers\User;

use App\Model\Special;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialController extends Controller
{
    public function index()
    {
        $specials = Special::all();

        return view('user.specials',compact('specials'));
    }
}
