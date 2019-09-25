<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
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
        return view('create');
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

    public function accord()
    {
        return view('accord');
    }
    public function vue2d()
    {
        return view('vue2d');
    }
}
