<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List all the users
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ensure that these fields are not empty
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required'
        ]);

        //Saving the information
        $user = new User([
            'email' => $request->get('email'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'password' => $request->get('password')
        ]);

        $user->save();
        $user = User::find($user->id);
        if ($request->hasFile('avatar')){
            $filename = $request->file('avatar')->storeAs(
                'avatars',
                $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension(),
                'public'
            );
            /*$filename = $user->id.'_avatar'.time().'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->storeAs('avatars',$filename,'public');*/
            $user->avatar = $filename;

            $user->save();
        }


        return redirect('/users')->with('success', 'User created!');
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
        $user = User::find($id);
        return view('users.edit', compact('user'));
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
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required'
        ]);

        //Saving the information
        $user = User::find($id);
        $user->email = $request->get('email');
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->password = $request->get('password');

        if ($request->hasFile('avatar')){
            /*$filename = $id.'_avatar'.time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('avatars',$filename,'public');*/
            $filename = $request->file('avatar')->storeAs(
                'avatars',
                $user->id.'_avatar'.time().'.'.$request->avatar->getClientOriginalExtension(),
                'public'
            );
            $user->avatar = $filename;
        }

        $user->save();

        return redirect('/users')->with('success', 'User updated!');
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
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('success', 'User deleted!');
    }
}
