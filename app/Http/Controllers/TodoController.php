<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use Session;
use Auth;

class TodoController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('todos.all');
    }

    public function add(){
        return view('todos.add');
    }
}
