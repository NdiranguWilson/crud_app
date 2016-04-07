<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Input, Redirect;
use App\User;
use DateTime;
use App\Contact;

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
        return view("pages.welcome");
    }

    public function login()
    {

        return view("auth.login");
    }

    public function register()
    {

        return view("auth.register");

    }

    public function contacts()
    {

        return view('pages.contacts');
    }

    public function feedback()
    {

        $results = Contact::get();

        return view('pages.feedback', compact('results'));
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            return redirect('login');
        } else {
            if (bcrypt($request->password) == $user->password) {

                return redirect('login');
            }

            return redirect('contacts');
        }

    }

    public function storeContacts(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'message' => 'required',
            'subject' => 'required',
            'phone_number' => 'required',


        ]);

        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [

            'message' => $request->get('message'),
            'mailing address' => $request->get('mailing'),
            'subject' => $request->get('subject'),
            'phone_number' => $request->get('phone_number'),

            'created_at' => new DateTime()
        ];
        Contact::insert($data);
        return Redirect::route('home');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating register users data
        $validator = Validator::make($request->all(), [
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
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('pass'))

        ];
        User::insert($data);
        return Redirect::route('contacts');

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
