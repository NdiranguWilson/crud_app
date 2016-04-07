<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Input, Redirect;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("welcome");
    }

    public function login(){

        return view("auth.login");
    }

    public function register(){

        return view("auth.register");

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating register users data
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email',
            'pass' => 'required',
            'repeatpass' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
        $data=[
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('pass'))

       ];
        User::insert($data);
        return Redirect::route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
