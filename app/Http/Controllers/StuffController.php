<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Stuff;

/**
 * index
 */
class StuffController extends Controller
{
    public function index(){
        $stuff=Stuff::latest()->get();
        return view('stuff.index',[

            'all_stuff' =>$stuff

        ]);
    }
/*
 *
 */
    public function create(){
        return view('stuff.create');
    }
    /*
     * store
     */

    public function store(Request $request){
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

       $unique_file='';
       if($request->hasFile('photo')){
           $file=$request->file('photo');
           $unique_file=md5(time().rand()). '.' .$file->getClientOriginalExtension();
           $file->move(public_path('assets/photo/'),$unique_file);
       }

       Stuff::create([

           'name' =>$request->name,
           'email' =>$request->email,
           'cell' =>$request->cell,
           'uname' =>$request->uname,
           'password' =>password_hash($request->pass,PASSWORD_DEFAULT),
           'age' =>$request->age,
           'photo' =>$unique_file

       ]);
       return redirect()->back()->with('success','stuff added successful !');
    }

    /*
     * show
     */
    public function show($id){
        $data=Stuff::find($id);
        return view('stuff.show',[
            'single_stuff' =>$data
        ]);
    }
    /*
     * delete
     */
    public function delete($id){
        $delete_stuff=Stuff::find($id);
        $delete_stuff->delete();

    if(file_exists('assets/photo/'. $delete_stuff->photo)){
        unlink('assets/photo/'. $delete_stuff->photo);
    }
        return redirect()->back()->with('success','stuff deleted successful !');
    }
    /*
     * edit
     */
    public function edit($id){
        $edit=Stuff::find($id);
        return view("stuff.edit",[
            'edit_data'=>$edit
        ]);
    }
    /*
     * update
     */

    public function update(Request $request,$id){
        $unique_file='';
        if($request->hasFile('new_photo')){
            $file=$request->file('new_photo');
            $unique_file=md5(time().rand()). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/photo/'),$unique_file);

            if(file_exists('assets/photo/' . $request->old_photo)){
                unlink('assets/photo/' . $request->old_photo);
            }
            else{
                $unique_file=$request->old_photo;
            }
        }


       $update= Stuff::find($id);
        $update->name=$request->name;
        $update->email=$request->email;
        $update->cell=$request->cell;
        $update->uname=$request->uname;
        $update->age=$request->age;
        $update->photo=$unique_file;
        $update->update();
        return redirect()->back()->with('success','stuff updated successful !');
    }
}
