<?php

namespace App\Http\Controllers;

use App\Mail\forgetPassword;
use App\Models\Blood;
use App\Models\department;
use App\Models\StudentProfile;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Psy\sh;
use function Symfony\Component\String\s;
use Illuminate\Support\Facades\Mail;



class UserAuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function registration(){
        return view('registration');
    }
    public function submit_res(){
        request() -> validate([
            'userName' => 'required|alpha_dash||unique:users',
            'student_id'=> 'required|numeric|unique:users',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|alpha_dash|confirmed'
        ]);

        User::create([
            'student_id' => request('student_id'),
            'username' => request('userName'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))

        ]);
        return redirect(route('login'))->with('success', 'Registation Succesful. please login Here');
    }



    public function login_submit(){
      $data= request() ->validate([
           'student_id'=> 'required|numeric',
           'password'=> 'required|alpha_dash'
       ]);

       if (Auth::attempt(
           [    'student_id' => request('student_id'),
               'password' => request('password')
             ])){

           if(Auth::check()  ) {
               $student_profile = StudentProfile::where('user_id',Auth::id())->get();
               if($student_profile->count() >=1){
                   return redirect(route('dashboard'))->with('success','Login Successful');
               }else{
                   return redirect(route('student.profile'))->with('success','Login Successful');
               }

           }

       }
       else{
           return back()->with('failed','Student id or password not match');
       }

    }






    public function dashboard(){
        $student_name = StudentProfile::where('user_id',Auth::id())->value('name');
        $depat = department::where('id',StudentProfile::where('user_id',Auth::id())->value('department_id'))->value('name');
        $blood = blood::where('id',StudentProfile::where('user_id',Auth::id())->value('blood_id'))->value('name');
        $club =count(StudentProfile::where('user_id',Auth::id())->get()) ;

        return view('dashboard',compact(['student_name','depat','blood','club']));
        dd(auth()::id()->name);
    }



    public function logout(){
        Auth::logout();
        return redirect(route('login'))->with('success','Logout successful.');
    }




    public function forget_pass(){
        return view('forgetPass');
    }




    public function forget_pass_function(){
        request() ->validate([
            'email'=> 'required|email',
        ]);

        $userExit = User::where('email',request('email'));

        if($userExit->count()==1){
            $data=[];
            $userExit=$userExit->first();
            $genarate_token = sha1(md5(rand()));
            $check = \App\Models\PasswordReset::where('email',request('email'));

            if($check->count() > 0)
            {
               $check -> update([
                   'token' => $genarate_token
               ]);
            }else
            {

                \App\Models\PasswordReset::create([
                    'user_id'=> $userExit->id,
                    'email'=>$userExit ->email,
                    'token' => $genarate_token

                ]);
            }
            $data['email'] = $userExit->email;
            $data['token'] = $genarate_token;
            Mail::to($userExit->email)->send(new forgetPassword($data));

        }else{
            return back()->with('failed','User Not find');
        }
    }





    public function show_reset_password($email,$token){

        $check = \App\Models\PasswordReset::where('email',$email)->where('token',$token);
        $userid = $check->first()->user_id;


        if($check->count() == 1)
        {
            $userid = $check->first()->user_id;
            return view('reset_password',compact('userid'));
        }else
        {
            return 'unauthorized';
        }
    }

    public function update_password(){
                request() -> validate([
            'password'=> 'required|alpha_dash|confirmed'
        ]);
        $userid = request('userid');
        User::find($userid)->update([
           'password'=> bcrypt(request('password'))

        ]);
        return view('login')->with('success','password Updated');

    }
}
