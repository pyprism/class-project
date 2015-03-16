<?php
/**
 * Created by PhpStorm.
 * User: prism
 * Date: 3/16/15
 * Time: 4:31 PM
 */


class UserController extends BaseController {

    public function index(){
        return View::make('auth/login');
    }

    public function login(){

        if(Auth::attempt(array('email'=>Input::get('email') , 'password'=>Input::get('password')))){
           $user = User::where('email', Input::get('email'))->first();
            if ($user->role == 'auth_member')
                return Redirect::to('/auth_member');
            elseif ($user->role == 'student')
                return Redirect::to('/student/dashboard');
            elseif ($user->role == 'second_marker')
                return Redirect::to('/second_marker/dashboard');
            elseif ($user->role == 'supervisor')
                return Redirect::to('/supervisor/dashboard');
            return "wtf :O";  // lol
        }
        return "Not ok" ; //todo
    }
}