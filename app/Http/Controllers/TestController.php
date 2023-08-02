<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function process (Request $request)
    {
        $request->validate([
            'test1' => 'required|in:0,1,2,3,4',
            'test2' => 'required|in:0,1,2,3,4',
            'test3' => 'required|in:0,1,2,3,4',
            'test4' => 'required|in:0,1,2,3,4',
            'test5' => 'required|in:0,1,2,3,4',
            'test6' => 'required|in:0,1,2,3,4',
            'test7' => 'required|in:0,1,2,3,4',
            'test8' => 'required|in:0,1,2,3,4',
            'test9' => 'required|in:0,1,2,3,4',
            'test10' => 'required|in:0,1,2,3,4',
        ]);

        $test1 = $request->input('test1');
        $test2 = $request->input('test2');
        $test3 = $request->input('test3');
        $test4 = $request->input('test4');
        $test5 = $request->input('test5');
        $test6 = $request->input('test6');
        $test7 = $request->input('test7');
        $test8 = $request->input('test8');
        $test9 = $request->input('test9');
        $test10 = $request->input('test10');

        $score = (int)$test1 + (int)$test2 + (int)$test3 + (int)$test4 + (int)$test5 + (int)$test6 + (int)$test7 + (int)$test8 + (int)$test9 + (int)$test10;

        return view('result',[
            "title" => "Result",
            "score" => $score,
        ]);
    }
}
