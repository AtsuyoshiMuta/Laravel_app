<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
