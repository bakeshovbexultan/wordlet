<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    //TODO переместить метод в другой класс
    public function create_set() {
        return view('create-set');
    }

    public function store_set(Request $request) {
        $set_id = DB::table('sets')->insertGetid([
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'set_name' => $request->set_name
        ]);

        for ($i = 1; $i <= $request->word_count; $i++) {
            $valueEn = 'english_word' . $i;
            $valueRu = 'russian_word' . $i;

            DB::table('words')->insert([
                'set_id' => $set_id,
                'english_word' => $request->$valueEn,
                'russian_word' => $request->$valueRu,
            ]);
        }

        return redirect('/library');

    }

    //TODO переместить метод в другой класс
    public function word_list($id) {
        $set = Set::find($id);
        $word_count = Set::find($id)->words->count();
        return view('word_list', ['set' => $set, 'word_count' => $word_count]);
    }

    public function latest($id) {
        return view('latest');
    }
}
