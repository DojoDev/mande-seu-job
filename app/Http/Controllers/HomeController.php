<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function register()
    {
        return view('register');
    }
    public function rolesPermissions()
    {
        var_dump("<h1>".auth()->user()->name."</h1>");
        //return ('Permissoes do usuarios e papeis');

        foreach(auth()->user()->roles as $role){
           echo "$role->name-><br>";
           $permissions = $role->permissions;

           foreach($permissions  as $permission){
           echo "$permission->name <br>" ;
           }
        }
        

       

        
    }
}
