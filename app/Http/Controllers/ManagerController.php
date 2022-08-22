<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Manager;


class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data=Manager::where('id','<',6)->get();
        return view('manager.index',[
            'all_manager'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Manager::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'cell'=>$request->cell,
           'username'=>$request->username,
       ]);
       return redirect()->back()->with('success','Manager added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $data=Manager::find($id);
        return view('manager.show',[
            'single_mng'=>$data
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
        $data=Manager::find($id);
        return view('manager.edit',[
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
        $update=Manager::find($id);
        $update->name=$request->name;
        $update->email=$request->email;
        $update->cell=$request->cell;
        $update->username=$request->username;
        $update->update();
        return redirect()->back()->with('success','Manager added successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data=Manager::find($id);
        $delete_data->delete();
        return redirect()->back()->with('success','Manager deleted successfully!');
    }
}
