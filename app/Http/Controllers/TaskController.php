<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   
    public function index()

    {
        $tasks = Task::all();
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('task.create');
    }


    public function store(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'task_desc' => 'required',
            'priority' => 'required',
            'due_deadline' => 'required',
            'status' => 'nullable',
        ]); 

        
        $status = $request->input('status', 'pending');
       
        Task::create([
            'title' => $validatedData['title'],
            'task_desc' => $validatedData['task_desc'],
            'priority' => $validatedData['priority'],
            'due_deadline' => $validatedData['due_deadline'],
            'status' => $status, // Use default or provided value
        ]);

        return redirect('/task')->with('success', "{$task->tittle} Task created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task, $id)
    {
        $task = Task::find($id);
        
        return redirect('/task')->with('success', "{$task->tittle} Created Successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));
        
        

    }

   
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'task_desc' => 'required|string',
            'priority' => 'required|string',
            'due_deadline' => 'required|date',
            'status' => 'nullable|string',
        ]);
    
     
        $task = Task::findOrFail($id);
        $task->update($validatedData);
    
        // Redirect to task list with a success message
        return redirect()->route('task.index')->with('success',"{$task->tittle} Task updated successfully.");
    }


    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('task.index')->with('success', "{$task->title} deleted successfully.");

    }
}
