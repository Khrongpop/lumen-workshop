<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $users = User::all();
        // return response($users, 200);
        return response()->json($users);
    }
}
