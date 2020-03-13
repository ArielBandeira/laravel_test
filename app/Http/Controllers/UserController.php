<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('user', ['users' => $users]);
    }

    public function turno()
    {
        $users = DB::table('users')->get();

        return view('turno', ['users' => $users]);
    }

    public function login()
    {
        $users = DB::table('users')->get();

        return view('login', ['users' => $users]);
    }
}