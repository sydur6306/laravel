<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_student=Student::where('id','<','5')->get();
        return view('student.index',[
            'all_stu' =>$all_student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        Student::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'cell' =>$request->cell,
            'uname' =>$request->uname,
        ]);
        return redirect()->back()->with('success','Student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Student::find($id);
        return view('student.show',[
            'single_stu'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $data=Student::find($id);
        return view('student.edit',[
            'edit_data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Student::find($id);
        $update->name=$request->name;
        $update->email=$request->email;
        $update->cell=$request->cell;
        $update->uname=$request->uname;
        $update->update();
        return redirect()->back()->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data=Student::find($id);
        $delete_data->delete();
        return redirect()->back()->with('success','Student deleted successfully');
    }
}
