<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class TestingVueController extends Controller
{
    public function index(Request $request)
    {
        // $res = auth()->user()->name;
        // \Log::info($res);
        // $res = auth('api')->user()->name;
        // $res = Auth::guard('api')->user()->name;
        // $res = $request->user('api')->name;
        // \Log::info($res);

        return [
            'name' => $res
        ];
        // return Auth::user()->name;
    }
}
