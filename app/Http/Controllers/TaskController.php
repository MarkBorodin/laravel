<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
        return 'TaskController method index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function create()
    {
        return 'TaskController method create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(Request $request)
    {
        return 'TaskController method store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function show($id)
    {
        return 'TaskController method show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function edit($id)
    {
        return 'TaskController method edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {
        return 'TaskController method update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function destroy($id)
    {
        return 'TaskController method destroy';
    }
}
