<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
    public function store(Request $request,$id)
    {
        \Auth::user()->favor($id);
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfavor($id);
        return back();
    }
}
