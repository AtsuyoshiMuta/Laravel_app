<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $items = DB::table('maintext')->get();
        return view('vote', ['items' => $items, 'id'=>$id]);
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

    public function update(Request $request, $id=0)
    {
        $param = [
            'hmm' => $request->hmm,
            'agree' => $request->agree,
        ];
        DB::update('update maintext set hmm = :hmm, agree = :agree', $param); //id番目の行だけアップデートするような処理が必要では？
        return redirect('/main');
    }
}
