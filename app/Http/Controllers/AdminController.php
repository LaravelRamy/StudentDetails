<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::paginate(10);
        return view('admin.user.index',compact('users'));
    }
    public function Edituser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }
    public function Updateuser(Request $request,$id)
    {
        //dd($request->all());
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect(url('admin/users'));
    }
    public function Deleteuser($id)
    {
        User::find($id)->delete();
        return back();
    }
}
