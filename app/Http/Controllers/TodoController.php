<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index(){
        return view('pages.todo.index');
    }

    protected $task;
    public function __construct(){
        $this->task= new Todo();

    }

    public function store(Request $request){
        $this->task->create($request->all());

        return redirect()->back();
    }
}
