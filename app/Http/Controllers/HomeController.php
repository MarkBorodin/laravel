<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
        return 'HomeController method index';
    }
}
