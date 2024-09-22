<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Validator;
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
        $messages = [
            'name.required' => 'باید حتما اسمت رو بنویسی.',
            'email.required' => 'باید حتما ایمیلت رو بنویسی.',
            'password.required'    => 'باید حتما رمزمت رو بنویسی.',
            'password.min'    => 'رمز باید حداقل 6 کاراکتر باشد.'
        ];
        $validationRules  = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6'
        ];
        $validator = Validator::make($req->all(),$validationRules ,$messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $User = new User();
        $User->name = $req->name; 
        $User->email = $req->email; 
        $User->password =bcrypt($req->password); 
        if($req->hasFile('img')){
            $img = $req->file('img');
            $imgName = time().".".$img->getClientOriginalExtension();
            $img->move('files/users/',".".$imgName);
            $User->img = 'files/users/'.$imgName;
        }
        else {
            $User->img = 'https://www.gravatar.com/avatar/'.hash( 'sha256', strtolower( trim( $User->email ) )) ;
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
        $User->img = 'https://www.gravatar.com/avatar/'.hash( 'sha256', strtolower( trim( $User->email ) )) ;
        $User->save();
        return redirect()->back();
    }
    public function editGet($id) {
        $User = User::find($id);
        return view('admin.users.edit',compact('User'));
    }
    public function editPost(Request $req, $id) {
        $messages = [
            'name.required' => 'باید حتما اسمت رو بنویسی.',
            'email.required' => 'باید حتما ایمیلت رو بنویسی.',
            'password.min'    => 'رمز باید حداقل 6 کاراکتر باشد.'
        ];
        $validationRules  = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:6'
        ];
        $validator = Validator::make($req->all(),$validationRules ,$messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $User = User::find($id);
        $User->name = $req->name; 
        $User->email = $req->email; 
        if($req->password){
            $User->password =bcrypt($req->password); 
        }
        if($req->hasFile('img')){
            $img = $req->file('img');
            $imgName = time().".".$img->getClientOriginalExtension();
            $img->move('files/users/',$imgName);
            $User->img = 'files/users/'.$imgName;
        }
        
        $User->save();
        return redirect('admin/users');
    }
}
