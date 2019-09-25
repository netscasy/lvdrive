<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\User;
use App\Exports\UsersExport;
use App\Exports\UserViewExport;
use App\Exports\UserQueryExport;
use Excel;

class UserController extends Controller
{
    public function index()
    {
        return view('users', ['users' => User::all()]);
    }

    public function export()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }
    public function exportView()
    {
        return Excel::download(new UserViewExport(), 'userview.xlsx');
    }
    public function exportQuery()
    {
        return Excel::download(new UserQueryExport(), 'userquery.xlsx');
    }
}
