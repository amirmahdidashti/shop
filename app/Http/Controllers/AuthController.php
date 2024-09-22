<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Validator;

class AuthController extends Controller
{
    public function loginGet()
    {
        return view('auth.login');
    }
    public function loginPost(Request $req)
    {
        $messages = [
            'email.required' => 'باید حتما ایمیلتو بنویسی.',
            'email.email' => 'فرمت ایمیل درست نیستش.',
            'password.required' => 'باید حتما رمزتو بنویسی.',
        ];
        $validationRules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($req->all(), $validationRules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $User = User::where('email', $req->email)->first();
        if (!$User) {
            return redirect("/register")->withInput();
        }
        if (Hash::check($req->password, $User->password)) {
            Auth::login($User);
            return redirect('/');
        }
        return redirect()->back()->withErrors(['email' => 'ایمیل یا رمز اشتباه است.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registerGet()
    {
        return view('auth.register');
    }
    public function registerPost(Request $req)
    {
        $messages = [
            'name.required' => 'باید حتما نامتو بنویسی.',
            'email.required' => 'باید حتما ایمیلتو بنویسی.',
            'email.email' => 'فرمت ایمیل درست نیستش.',
            'password.required' => 'باید حتما رمزتو بنویسی.',
            
        ];
        $validationRules = [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($req->all(), $validationRules, $messages);
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
            $img->move('files/users/',$imgName);
            $User->img = 'files/users/'.$imgName;
        }
        else {
            $User->img = 'https://www.gravatar.com/avatar/'.hash( 'sha256', strtolower( trim( $User->email ) ));
        }
        $User->save();
        Auth::login($User);
        return redirect('/');
    }
    public function profile() {
        return view('auth.profile');
    }
    public function editProfile(Request $req) {
        $messages = [
            'name.required' => 'باید حتما نامتو بنویسی.',
            'email.required' => 'باید حتما ایمیلتو بنویسی.',
            'email.email' => 'فرمت ایمیل درست نیستش.',
        ];
        $validationRules = [
            'name' => 'required',
            'email' => 'required|email',
        ];
        $validator = Validator::make($req->all(), $validationRules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $User = Auth::user();
        $User->name = $req->name;
        $User->email = $req->email;
        if($req->hasFile('img')){
            $img = $req->file('img');
            $imgName = time().".".$img->getClientOriginalExtension();
            $img->move('files/users/',$imgName);
            $User->img = 'files/users/'.$imgName;
        }
        $User->save();
        return redirect()->back();
    }

    public function deleteImg() {
        $User = Auth::user();
        $User->img = 'https://www.gravatar.com/avatar/'.hash( 'sha256', strtolower( trim( $User->email ) ));
        $User->save();
        return redirect()->back();
    }
}
