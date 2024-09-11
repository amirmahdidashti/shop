<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class UserController extends Controller
{
    public function list() {
        $Users = User::get();
        return view('admin.users.list',compact('Users'));
    }
    public function insertGet() {
        return view('admin.users.insert');
    }
    public function insertPost(Request $req) {
        $User = new User();
        $User->name = $req->name; 
        $User->email = $req->email; 
        $User->password = $req->password; 
        if($req->hasFile('img')){
            $img = $req->file('img');
            $imgName = time().$img->getClientOriginalExtension();
            $img->move('files/users/',$imgName);
            $User->img = 'files/users/'.$imgName;
        }
        $User->save();
        return redirect('admin/users');
    }
    public function delete($id) {
        User::find($id)->delete();
        return redirect()->back();
    }
    
    public function deleteImg($id) {
        $User = User::find($id);
        $User->img = 'files/users/default.jpg';
        $User->save();
        return redirect()->back();
    }
    public function editGet($id) {
        $User = User::find($id);
        return view('admin.users.edit',compact('User'));
    }
    public function editPost(Request $req, $id) {
        $User = User::find($id);
        $User->name = $req->name; 
        $User->email = $req->email; 
        $User->password = $req->password; 
        if($req->hasFile('img')){
            $img = $req->file('img');
            $imgName = time().$img->getClientOriginalExtension();
            $img->move('files/users/',$imgName);
            $User->img = 'files/users/'.$imgName;
        }
        $User->save();
        return redirect('admin/users');
    }
}
