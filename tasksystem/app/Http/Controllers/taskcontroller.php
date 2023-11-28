<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Task;
class taskcontroller extends Controller
{
    public function index()
    {
        $tasks =task::where ('completed',false)->orderBy('priority','desc')->orderBy('due_date')->get();
        return view('tasks.index',compact('tasks'));
    }

    public function create()
    {
        
        return view('tasks.create');
    }

    public function store(Request $request)

    {
        $request->validate([
            'title'=> 'required|max:255',
            'description'=> 'nullable',
            'priority'=> 'required|max:255',
            'due_date'=> 'nullable|max:255',
        ]);
        Task::create([
            'title'=>$request->input('title'),
            'description'=> $request->input('description'),
            'priority'=> $request->input('priority'),
            'due_date'=> $request->input('due_date'),

        ]);
        
        return redirect()->route ('tasks.index')->with ('success', 'Task Create Successfully');
    }
}