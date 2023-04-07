<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{


    public function regis()
    {
        return view('home.form');
    }
    public function login()
    {
        return view('home.login');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'first_name'=> 'required',
                'last_name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:5|max:12|confirmed',
                'password_confirmation'=>'required'
           ]
            );
      $user = new User;
      $user->first_name = $request['first_name'];
      $user->last_name = $request['last_name'];
      $user->email = $request['email'];
      $user->password =md5($request['password']);
      $user->save();
      return $this->checkuser($request);
    
    }

    public function checkuser(Request $request )
    {
        $request->validate(
            [
               
                'email'=>'required|email',
                'password'=>'required|min:5|max:12 ',
             ]
             );
            $user = User::where('email','=',$request->email)->first();
            if ($user){
                if(md5($request['password'])==$user['password'])
                {
                   $request->session()->put('loginId',$user->id);
                    return DirectoryController::showdir();         
                } else{
            
                    return back()->with('fail','Incorrect Password'); 
                }
            }else{

                return back()->with('fail','This Email Is not Registerd.');
            }
            
        }

        public function mydrive()
        {
            $data=array();
            if(Session()->has('loginId')){
                $data = User::where('id','=',Session()->get('loginId'))->first();
               
            }
            return view('directory.folder',compact('data'));
            }


            public function logout()
        {
            if(Session()->has('loginId')){

                Session()->pull('loginId');
                return redirect('login');
            }
        }


    
           
        

        
}

