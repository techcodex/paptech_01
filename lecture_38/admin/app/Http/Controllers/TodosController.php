<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Todo;
use Session;
class TodosController extends Controller
{
    public function index() {
//        $query = "select * from todos ";
//        $todos = DB::select($query);
        $todos = Todo::all();
//        dd($todos);
        $data = [
            'todos'=>$todos,
        ];
        return view('welcome')->with($data);
    }
    public function delete($id) {
//        dd($id);
        $todo = Todo::find($id); 
        $todo->delete();
        Session::flash('success',"Delete Successfully");
        return redirect()->back();
        
    }
    public function store(Request $request) {
//        dd($request->all());
        $request->validate([
           'todo'=>'required', 
        ]);
        
        Todo::create($request->all());
//        Todo::create([
//            'todo'=>$request->todo_name,
//        ]);
        Session::flash('success','Todo Created Successfully');
        return back();
    }
    public function deactive($id) {
        $todo = Todo::find($id);
        $todo->status = 0;
        $todo->todo = "This one is Chnaged";
        $todo->save();
        Session::flash('success',"Todo Updated Successfully");
        return back();
    }
    public function active($id) {
        $todo = Todo::find($id);
        $todo->status = 1;
        $todo->save();
        Session::flash('success',"Todo Updated Successfully");
        return back();
    }
}
