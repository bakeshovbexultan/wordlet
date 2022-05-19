<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    public function create_set() {
        return view('create-set');
    }

    public function store_set(Request $request) {
        $set_id = DB::table('days')->insertGetid([
            'date' => $_POST['date'],
            'set_name' => $_POST['set_name']
        ]);

        $num = 6;

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

    public function word_list($id) {
        $set = Set::find($id);
        return view('word_list', ['set' => $set]);
    }
}
