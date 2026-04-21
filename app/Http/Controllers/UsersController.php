<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        dd('UsersController@index called');
        //return view('users.index');
    }
    public function create()
    {
        try {
            $this->seedAdminUser();
            return response()->json(['message' => 'Admin user created successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create admin user: ' . $e->getMessage()], 500);
        }
    }
    public function seedAdminUser()
    {
                User::create([
            'name' => 'William',
            'email' => 'william@example.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
    }
}

