<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function latest() {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('latest', ['user' => $user]);
    }

    public function welcome () {
        if (Auth::guest()) {
            return view('welcome');
        } else {
            $id = Auth::user()->id;
            $user = User::find($id);
            return view('latest', ['user' => $user]);
        }
    }
}
