<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function simulasi()
    {
        return view('simulasi');
    }
}