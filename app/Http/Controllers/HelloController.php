<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index(Request $request, Response $response) //getされた時点で必ずrequestは受け取っているからあとはそれを変数に格納してやるだけで使える。・
    {
        $html = <<< EOF
            <html>
            <head>
            <title>Hello/Index</title>
            <style>
            body {
            font-size: 16px;
            color: #999;
            }
            h1 {
            font-size: 120px;
            text-align: right;
            color: #fafafa;
            margin: -50px 0px -120px 0px;
            }
            </style>
            </head>
            <body>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
            <h3>Request->url()</h3>
            <pre>{$request->url()}</pre>
            </body>
            </html>
        EOF;
            $response->setContent($html);
            return $response;
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $item = DB::table('people')
            -> where('id', $request->id)->first();
        return view('hello.del', ['form' =>$item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')
            ->where('id', $request->id)->delete();
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('people')
                ->offset($page * 3)
                ->limit(3)
                ->get();
        return view('hello.show', ['items' => $items]);
    }
}


