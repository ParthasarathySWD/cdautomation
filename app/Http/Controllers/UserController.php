<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $FirstName = (isset($request->input('firstname'))) ? $request->input('firstname') : '';
        $LastName = (isset($request->input('lastname'))) ? $request->input('lastname') : '';
        $Email = (isset($request->input('email'))) ? $request->input('email') : '';
        $phoneno = (isset($request->input('phonenumber'))) ? $request->input('phonenumber') : '';
        $username = (isset($request->input(''))) ? $request->input('username') : '';
        $password = (isset($request->input(''))) ? $request->input('cpassword') : '';

        $UserDetails = new User([
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'Email' => $Email,
            'PhoneNumber' => $phoneno,
            'UserName' => $username,
            'Password' => $password,
            'Status' => 1,
        ]);
        $UserDetails->save();

        return response()->json('Product created!');
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
