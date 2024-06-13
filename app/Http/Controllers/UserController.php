<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $users = User::get();
        return view('view-data', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
            // 'tc' => 'required|in:1'
        ]);

        //Uploading Image
        $file = $request->file('image');
        $path = $file->store('uploads', 'public');

        if($path){
            $user = User::create([
                'full_name' => $request->fullName,
                'email' => $request->email,
                'password' => $request->password,
                'address' => $request->address,
                'image' => $path,
            ]);

            if($user){
                return redirect()->route('user.index')->with('message','User added Successfully');
            }else{
                abort(403);
            }
        }else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //User::truncate();
    }
}
