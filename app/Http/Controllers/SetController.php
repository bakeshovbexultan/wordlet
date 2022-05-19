<?php

namespace App\Http\Controllers;

use App\Models\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SetController extends Controller
{
    public function index() {
        $sets = Set::where('user_id', Auth::user()->id)->get();

        return view('/library', ['sets' => $sets]);
    }

    public function delete($id) {
        DB::table('sets')->where('id', $id)->delete();
        DB::table('words')->where('set_id', $id)->delete();
        return redirect('/library');
    }
}
