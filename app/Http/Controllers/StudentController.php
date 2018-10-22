<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }


    public function create()
    {
        return view('create');
    }

}