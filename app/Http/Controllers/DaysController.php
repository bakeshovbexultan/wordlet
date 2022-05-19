<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaysController extends Controller
{
    public function index() {
        $days = Day::all();
        return view('/library', ['days' => $days]);
    }

    public function delete($id) {
        DB::table('days')->where('id', $id)->delete();
        DB::table('words')->where('day_id', $id)->delete();
        return redirect('/library');
    }
}
