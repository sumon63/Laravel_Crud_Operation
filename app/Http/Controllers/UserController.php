<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Post;

class UserController extends Controller
{
    public function showData(){
        // $showData=Post::paginator(3);
        $showData=Post::simplePaginate(3);
        return view('show_data',compact('showData'));
    }
    public function addData(){
        return view('add_data');
    }
    public function storeData(Request $request){
        $request->all();

        $rules=[
            'name'=>'required',
            'department'=>'required',
            'roll'=>'required|min:6|max:6',
            'shift'=>'required',
            'semester'=>'required',
            'address'=>'required'
        ];
        $this->validate($request,$rules);

        $crud=new Post();
        $crud->Name=$request->name;
        $crud->Department=$request->department;
        $crud->Roll=$request->roll;
        $crud->Shift=$request->shift;
        $crud->Semester=$request->semester;
        $crud->Address=$request->address;
        $crud->save();
        Session::flash('msg','Data Successfully Added');
        return redirect('/show-data');
    }
    public function editData($id=null){
        $editData=Post::find($id);
        return view('edit_data',compact('editData'));
    }
    public function updateData(Request $request, $id){
        $request->all();

        $rules=[
            'name'=>'required',
            'department'=>'required',
            'roll'=>'required|min:6|max:6',
            'shift'=>'required',
            'semester'=>'required',
            'address'=>'required'
        ];
        $this->validate($request,$rules);

        $crud=Post::find($id);
        $crud->Name=$request->name;
        $crud->Department=$request->department;
        $crud->Roll=$request->roll;
        $crud->Shift=$request->shift;
        $crud->Semester=$request->semester;
        $crud->Address=$request->address;
        $crud->save();
        Session::flash('msg','Data Successfully Updated');
        return redirect('/show-data');
    }
    public function deleteData($id=null){
        $deleteData=Post::find($id);
        $deleteData->delete();
        Session::flash('msg','Data Successfully Deleted');
        return redirect('/show-data');
    }
}
