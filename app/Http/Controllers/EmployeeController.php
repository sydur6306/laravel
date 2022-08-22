<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /*
     * index
     */

    public function index(){
        $employee=Employee::latest()->get();
        return view('employee.index',[
            'all_emp' => $employee
        ]);
    }

    /*
     * create
     */

    public function create(){
        return view('employee.create');
    }
    /*
     * store
     */

    public function store(Request $request){

        $unique_file='';
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $unique_file=md5(time().rand()). '.' .$file->getClientOriginalExtension();
            $file->move(public_path('media/stuff'),$unique_file);
        }
        Employee::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'cell' =>$request->cell,
            'username' =>$request->uname,
            'password' =>password_hash($request->pass,PASSWORD_DEFAULT),
            'age' =>$request->age,
            'photo' =>$unique_file,
        ]);
        return redirect()->back()->with('success','Employee added successfully!');
    }
    /*
     * show
     */
    public function show($id){

        $employee=Employee::find($id);
        return view('employee.show',[
            'all_employee'=> $employee
        ]);

    }
    /*
     * delete
     */
    public function delete($id){
        $delete_id=Employee::find($id);
        $delete_id->delete();
        return redirect()->back()->with('success','Employee deleted successfully!');

    }
}
