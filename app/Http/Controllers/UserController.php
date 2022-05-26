<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function showForm(){
        return view('dashboard.formadduser');
    }
    public function addUsers(Request $request){
       
        $validator=Validator::make($request->all(),[
            "user_name"=>"required|max:50",
            "user_email"=>"required|unique:users,email",
            "user_password"=>"required",
            "c_password"=>"required|same:user_password"
        ]);
        if ($validator->fails()) {
            return redirect('/userform')
                ->withInput()
                ->withErrors($validator);
        }
        $user=new User();
        $user->name=$request->user_name;
        $user->email=$request->user_email;
        $user->password=Hash::make($request->user_password);
        $user->save();
        return redirect('/userlist')->with('status', 'Event Added with success!');
    }
    public function showUserList(){
        $users=User::orderBy('created_at','desc')->get();
        return view('dashboard.userlist')->with('users',$users);
    }
    public function showSignInForm(){
        return view('signinform');
    }
    public function delete($id){
        $user=User::find($id);
        
        $user->delete();
        return redirect('userlist')->with('status','deleted successfully');
    }
}
