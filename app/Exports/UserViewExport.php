<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserViewExport implements FromView, ShouldAutoSize, WithHeadings
{
    // private $users;

    // public function __construct($users)
    // {
    //     $this->users = $users;
    // }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() :View
    {
        // $users = User::all();
        return view('usersexcel', ['users' => User::all()]);
        // return view('users', compact('users'));
    }

    public function headings(): array
    {
        return [
            '#',
            'Full Name',
            'Email-Id'
        ];
    }
}
