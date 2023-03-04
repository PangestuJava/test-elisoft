<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all user data
        $users = User::orderBy('created_at', 'DESC')->get();
        // view
        return view('admin.users.index', [
            'title' => 'Users',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view
        return view('admin.users.create', [
            'title' => 'User Add'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        // String password random
        $password = Str::random(8);
        // Save Data to Database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password)
        ]);
        // flash data
        return redirect()->to('/users')->with([
            'status' => 'success',
            'message' => 'User Add successfully!!',
            'email' => 'Email: ' . $request->email,
            'password' => 'Password: ' . $password
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // view
        return view('admin.users.update', [
            'title' => 'User Add',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // update user data
        $user->update($request->all());
        // flash data
        return redirect()->to('/users')->with([
            'status' => 'success',
            'message' => 'User Update successfully!!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Check if a user is signed in or not
        if ($user->id === Auth::user()->id) {
            return redirect()->back()->withErrors(['error' => 'You cant delete a signed-in user']);
        }
        // Delete user
        $user->delete();
        // flash data
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'User Delete successfully!!',
        ]);;
    }
}
