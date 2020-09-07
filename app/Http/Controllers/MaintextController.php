<?php

namespace App\Http\Controllers;

use App\Maintext;
use Illuminate\Http\Request;

class MaintextController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if (isset($query)){
            $items = Maintext::searchQuery($query);
            return view('main', ['items' => $items]);
        }else{
            $items = Maintext::all();
            return view('main', ['items' => $items]);
        }
    }
}
