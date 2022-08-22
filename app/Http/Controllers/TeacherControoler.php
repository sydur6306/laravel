<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherControoler extends Controller
{
    /*
     * index
     */
    public function index1(){
        $teacher=Teacher::latest()->get();
        return view('teacher.index',[

                'all_teacher' =>$teacher

            ]);
    }

    /*
     * create
     */
    public function create1(){
        return view('teacher.create');
    }

    public function store1(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required |unique:stuffs',
            'cell' => 'required |unique:stuffs',
            'uname' => 'required | min:6 | max:15 |unique:stuffs',
        ],[
            'name.required' => 'নামের ঘর পূরণ করুন',
            'email.required' => 'ইমেইল এর ঘর পূরণ করুন ',
            'email.unique' => 'আপনার ইমেইল কেউ নিয়ে নিছে',
            'uname.required' => 'ইউজার নেইম পূরণ করুন',
            'cell.required' => 'ফোন নাম্বার পূরণ করুন',
            'cell.unique' => ' আপনার ফোন কেউ নিয়ে নিছে',
        ]);



        Teacher::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'cell' =>$request->cell,
            'username' =>$request->uname,
            'password'=>password_hash($request->pass,PASSWORD_DEFAULT),
            'age' =>$request->age,
            'photo' =>''
        ]);
        return redirect()->back()->with('success','Teachers added successful');
    }
}
