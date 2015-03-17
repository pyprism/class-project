<?php
/**
 * Created by PhpStorm.
 * User: prism
 * Date: 3/17/15
 * Time: 1:45 PM
 */

class MemberController extends BaseController {

    public function index(){
        return View::make('member/dashboard');
    }
}