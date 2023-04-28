<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Function_;
use DB;

/**
 * Summary of UserController
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function AllUser()
    // {
    //     return view('backend.user.all-user');
    // }

    /**
     * Summary of AllUser
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function AllUser()
    {
        $all = DB::table('users')->get();
        return view('backend.user.all-user', compact('all'));
    }

    // adduser, insertuser
    public function AddUserIndex()
    {
        return view('backend.user.add_user');
    }
    
}
