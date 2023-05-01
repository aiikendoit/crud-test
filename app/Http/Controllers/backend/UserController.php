<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Function_;
use Illuminate\Support\Facades\Hash;
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

    public function InsertUser(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $insert = DB::table('users')->insert($data);
        if($insert)
        {
            // echo "Added Successful!";
            $notification=array
            (
                'message'=>'User Added Successfully!',
                'alert-type'=>'success'
            );
            return redirect()->route('AllUser')->with($notification);
        }
        else
        {
            // echo "Something Went Wrong!";
            $notification=array
            (
                'message'=>'Something went wrong!',
                'alert-type'=>'error'
            );
            return redirect()->route('AllUser')->with($notification);
        }
    }

    public function EditUser($id)
    {
        $edit = DB::table('users')->where('id',$id)->first();
        return view('backend.user.edit_user',compact('edit'));
    }

    public function UpdateUser(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('users')
        ->where('id',$id)
        ->update($data);
        if($update)
        {
            // echo "Update Successfully!";
            $notification=array
            (
                'message'=>'User Update Successfully!',
                'alert-type'=>'success'
            );
            return redirect()->route('AllUser')->with($notification);
        }
        else
        {
            // echo "Something Went Wrong!";
            $notification=array
            (
                'message'=>'Something went wrong!',
                'alert-type'=>'error'
            );
            return redirect()->route('AllUser')->with($notification);
        }
    }

    public function DeleteUser($id)
    {
        $delete = DB::table('users')->where('id', $id)->delete();
        if($delete)
        {
            // echo "Update Successfully!";
            $notification=array
            (
                'message'=>'User Deleted Successfully!',
                'alert-type'=>'success'
            );
            return redirect()->route('AllUser')->with($notification);
        }
        else
        {
            // echo "Something Went Wrong!";
            $notification=array
            (
                'message'=>'Something went wrong!',
                'alert-type'=>'error'
            );
            return redirect()->route('AllUser')->with($notification);
        }
    }
}
