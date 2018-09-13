<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get()->all();
        $roles = Role::get()->all();
        $permissions = Permission::get()->all();
        return view('manage.dashboard')
                ->withUsers($users)
                ->withRoles($roles)
                ->withPermissions($permissions);
    }
}
