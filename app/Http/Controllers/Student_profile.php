<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\Clubs;
use App\Models\department;
use App\Models\StudentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Student_profile extends Controller
{
    public function index()
    {
        $dep = department::all();
        $club = Clubs::all();
        $blood = Blood::all();

        return view('student_profile',compact(['dep','club','blood']));
    }

    public function student_profile(){
        request()->validate([
           'name' =>'required',
            'department' =>'required',
            'blood'=>'required',
            'club'=>'required',
            'profile_picture'=>'required'
        ]);

        foreach(request('club') as $clubs){
        StudentProfile::create([
            'name' =>request('name'),
            'department_id'=>request('department'),
            'club_id'=>$clubs,
            'blood_id'=>request('blood'),
            'profile_picture'=>request('profile_picture'),
            'user_id'=>Auth::id(),
        ]);
        }

        $student_name = StudentProfile::find(Auth::id())->get;


        return redirect(route('dashboard',compact('student_name')))->with('success','Data updated');


    }
}
