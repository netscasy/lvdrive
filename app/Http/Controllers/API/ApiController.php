<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function userDashBoard()
    {
        return ['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'];
    }
}
