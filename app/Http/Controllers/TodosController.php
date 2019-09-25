<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function todos()
    {
     
        $todos =  [
        {
        "id": 1,
        "title": "Todo one mod",
        "completed": true,
        "checked": "checked"
        },
        {
        "id": 2,
        "title": "Todo two",
        "completed": false,
        "checked": ""
        },
        {
        "id": 3,
        "title": "Todo three",
        "completed": false,
        "checked": ""
        }
        ];
        return $todos;
    }
}
