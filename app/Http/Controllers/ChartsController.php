<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 *
 */
class ChartsController
{
    public function __invoke()
    {
        return view('charts.show');
    }
}
