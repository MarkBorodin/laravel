<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\Response|string
     */
    public function create()
    {
        return 'UserController method create';
    }

    /**
     * @return \Illuminate\Http\Response|string
     */
    public function auth()
    {
        return 'UserController method auth';
    }

    /**
     * @return \Illuminate\Http\Response|string
     */
    public function show(int $id)
    {
        return 'UserController method show';
    }

    /**
     * @return \Illuminate\Http\Response|string
     */
    public function delete()
    {
        return 'UserController method destroy';
    }
}
