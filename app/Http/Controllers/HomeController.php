<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Integer;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function vote($id)
    {
        $item = DB::table('maintext')->where('id', $id)->first();
        return view('vote', ['item' => $item, 'id'=>$id]);
    }

    public function index(Request $request)
    {
        $items = DB::table('maintext')->get();
        return view('main', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $param = [
            'maintext' => $request->maintext,
        ];
        DB::table('maintext')->insert($param);
        return redirect('/main');
    }

//    public function edit(Request $request)
//    {
//        $param = ['id' => $request->id];
//        $item = DB::select('select * from people where id = :id', $param);
//        return view('',['form' => $item[0]]);
//    }

    public function update(Request $request, $id)
    {
        $item = DB::table('maintext')->where('id', $id)->first();
        $param = [
            'hmm' => $item->hmm - ceil($request->vote - 1),
            'agree' => $item->agree + $request->vote,
            'maintext_id' => $id,
        ];
        $user_id = Auth::id();
        $voted = DB::table('vote')->where('user_id', $user_id)->where('maintext_id', $param['maintext_id'])->first();
        if (isset($voted)) {
            return response()->json([
                'error' => 'You have already voted.'
            ]);
        } else {
            DB::update('update maintext set hmm = :hmm, agree = :agree where id = :maintext_id', $param);
            DB::table('vote')->insert([
                'user_id' => $user_id,
                'maintext_id' => $id,
                'results' => 0]);
            return response()->json([
                'error' => ''
            ]);
        }
    }
}
