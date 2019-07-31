<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrar;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'headline' => "BD Model Test", 
            'slogan' => "A handy tool to test your skills", 
        );
        return view("registration.sign_up")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'headline' => "BD Model Test", 
            'slogan' => "A handy tool to test your skills", 
        );
        echo "i am create controller";die("with thanda");
        return view("registration.sign_up")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registrar = new Registrar;
        $registrar->name = $request->input("full_name");
        $registrar->email = $request->input("email");
        $registrar->phone = $request->input("phone");
        $registrar->password = $request->input("password");
        $registrar->user_type = $request->input("user_type");
        $registrar->save();

        return redirect('/registrar')->with('success', 'Registration Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "user with login id";
    }

    public function login()
    {
        $data = array(
            'headline' => "BD Model Test", 
            'slogan' => "A handy tool to test your skills", 
        );
        return view("registration.login")->with($data);
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
