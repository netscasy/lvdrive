<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AxFormController extends Controller
{
    // FormController.php

    /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function create()
    {
        //
        // $res = auth()->user()->name;
        // \Log::info($res);
        // $res = auth('api')->user()->name;
        return view('axcreate');
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
           'footballername' => 'required',
           'club' => 'required',
           'country' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        return response()->json(['success'=>'Record is successfully added']);
    }
}
