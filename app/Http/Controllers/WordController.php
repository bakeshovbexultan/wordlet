<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    public function index()
    {
        $sets = Set::where('user_id', Auth::user()->id)->get();

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('/library', ['sets' => $sets, 'user' => $user]);
    }

    public function create()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('create-set', ['user' => $user]);
    }

    public function store(Request $request)
    {
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

        $id = Auth::user()->id;
        $user = User::find($id);

        return redirect('/library', ['user' => $user]);
    }

    public function show($id)
    {
        $set = Set::find($id);
        $word_count = Set::find($id)->words->count();

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('word_list', ['set' => $set, 'word_count' => $word_count, 'user' => $user]);
    }

    public function edit($id)
    {
        $set = Set::find($id);
        $word_count = Set::find($id)->words->count();

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('edit', ['set' => $set, 'word_count' => $word_count, 'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        dd($request->words, $id);

        for ($i = 1; $i < $request->word_count; $i++) {
            $valueEn = 'english_word' . $i;
            $valueRu = 'russian_word' . $i;

            DB::table('words')
                ->where('set_id', $request->id)
                ->update(
                    ['english_word' => $request->$valueEn,
                    'russian_word' => $request->$valueRu]
                );
        }
    }

    public function destroy($id)
    {
        DB::table('sets')->where('id', $id)->delete();
        DB::table('words')->where('set_id', $id)->delete();

        $id = Auth::user()->id;
        $user = User::find($id);
        return redirect('/library', ['user' => $user]);
    }
}
