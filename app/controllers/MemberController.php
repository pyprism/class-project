<?php
/**
 * Created by PhpStorm.
 * User: prism
 * Date: 3/17/15
 * Time: 1:45 PM
 */

class MemberController extends BaseController {

    public function index($email){
        $admin = User::where(['email' => $email])->first();
        if($admin->role == 'auth_member'){
            $allocated_students = Allocation::all();
            //dd($allocated_students);
            return View::make('member/dashboard', compact('allocated_students'));
        }
        return Redirect::to('/');

    }

    public function allocation(){
        $students = User::where(['role'=> 'student'])->get();
        $allocated = Allocation::all();
        dump($allocated);
       // return View::make('member/allocation', compact('students'));
    }
}