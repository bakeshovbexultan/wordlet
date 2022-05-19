<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Words;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordsController extends Controller
{
    public function create_set() {
        return view('create-set');
    }

    public function store_set(Request $request) {
        $day_id = DB::table('days')->insertGetid([
            'date' => $_POST['date'],
            'set_name' => $_POST['set_name']
        ]);

        $num = 6;

        for ($i = 1; $i <= $request->word_count; $i++) {
            $valueEn = 'english_word' . $i;
            $valueRu = 'russian_word' . $i;

            DB::table('words')->insert([
                'day_id' => $day_id,
                'english_word' => $request->$valueEn,
                'russian_word' => $request->$valueRu,
            ]);
        }

//        DB::table('words')->upsert([
//            [
//                'day_id' => $day_id,
//                'english_word' => $request->english_word1,
//                'russian_word' => $request->russian_word1,
//            ],
//            [
//                'day_id' => $day_id,
//                'english_word' => $request->english_word2,
//                'russian_word' => $request->russian_word2,
//            ],
//            [
//                'day_id' => $day_id,
//                'english_word' => $request->english_word3,
//                'russian_word' => $request->russian_word3,
//            ],
//            [
//                'day_id' => $day_id,
//                'english_word' => $request->english_word4,
//                'russian_word' => $request->russian_word4,
//            ],
//            [
//                'day_id' => $day_id,
//                'english_word' => $request->english_word5,
//                'russian_word' => $request->russian_word5,
//            ]
//        ], ['day_id', 'english_word, russian_word']);

//        while (true) {
//            $num = 6;
//            $valueEn = 'english_word' . $num;
//            $valueRu = 'russian_word' . $num;
//
//            while (!empty($request->$valueEn)) {
//                DB::table('words')->insert([
//                    'day_id' => $day_id,
//                    'english_word' => $request->$valueEn,
//                    'russian_word' => $request->$valueRu,
//                ]);
//                $num++;
//                $value = 'english_word' . $num;
//                echo $value . '<br>';
//                if (empty($request->valueEn)) {
//                    break;
//                }
//            }
//            if (empty($request->valueEn)) {
//                break;
//            }
//        }

        return redirect('/library');

    }

    public function word_list($id) {
        $day = Day::find($id);
        return view('word_list', ['day' => $day]);
    }
}
