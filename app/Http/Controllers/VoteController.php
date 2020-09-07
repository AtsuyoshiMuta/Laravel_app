<?php

namespace App\Http\Controllers;

use App\Maintext;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{

    public function show(int $id)
    {
        $item = Maintext::where('id', $id)->first();
        return view('vote', ['item' => $item, 'id' => $id, 'user_id' => Auth::id()]);
    }

    public function create(Request $request)
    {
        $param = [
            'poster_id' => Auth::id(),
            'created_at' => date("Y-m-d H:i:s"),
            'title' => $request->title,
            'maintext' => $request->maintext,
            'hmm' => 0,
            'agree' => 0,
        ];
        $maintext = new Maintext;
        $maintext->fill($param)->save();
        return redirect('/main');
    }

    public function updateCount(Request $request, int $id)
    {
        $item = Maintext::where('id', $id)->first();
        $param = [
            'hmm' => $item->hmm - ceil($request->vote - 1),
            'agree' => $item->agree + $request->vote,
            'maintext_id' => $id,
        ];
        $voted = Vote::where('user_id', Auth::id())->where('maintext_id', $param['maintext_id'])->first();
        if (isset($voted)) {
            return response()->json([
                'error' => 'You have already voted.'
            ]);
        } else {
            $item->fill($param)->save();
            $vote = new Vote;
            $vote->fill([
                'user_id' => Auth::id(),
                'maintext_id' => $id,
                'results' => 0
            ])->save();
            return response()->json([
                'error' => ''
            ]);
        }
    }

    public function showDeleteItem(int $id)
    {
        $item = Maintext::where('id', $id)->first();
        return view('delete', ['item' => $item]);
    }

    public function delete(int $id)
    {
        Maintext::where('id', $id)->delete();
        return redirect('/main');
    }
}
