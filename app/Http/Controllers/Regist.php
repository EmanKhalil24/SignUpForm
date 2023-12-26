<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignUp;

class Regist extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sign = SignUp::all();
        return view('signup', compact('sign'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sign = new SignUp();
        $sign->username = $request->Username;
        $sign->password = $request->Password;
        $sign->name = $request->name;
        $sign->email = $request->email;
        $sign->phone = $request->Phone;
        $sign->save();
        redirect('example/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
