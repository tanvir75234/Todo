<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Carbon\Carbon;
use Session;
use Auth;

class TodoController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $data = Todo::get();
        return view('todos.all',compact('data'));
    }

    public function add(){
        return view('todos.add');
    }

    public function view(){
        $all = Todo::get();
        return view('todos.view',compact('all'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name' => 'required|max:30',
            'phone' => 'required',
            'work' => 'required',
        ],[
            'name.required' => 'Please Enter Your Name',
            'phone.required' => 'Please enter a valid phone',
            'work.required' => 'Please enter a valid work',
        ]);

        $slug = 'Todo'.uniqid(20);

        $insert =Todo::insert([
            'todo_name' => $request['name'],
            'todo_phone' => $request['phone'],
            'todo_work' => $request['work'],
            'todo_email' => $request['email'],
            'todo_photo' => $request['photo'],
            'todo_slug' => $slug,
            'updated_at' => Carbon::now('asia/dhaka')->toDateTimeString(),
        ]);
    }

    public function update(){
        return view('todos.update');
    }
}
