<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $task= Task::findorfail($id);
        foreach ($task->users as $email) {
            //
            $emails[]=$email->email;
        }
        
        return json_encode($emails);
        // dd($email->users);
    }
    
    public function user($id)
    {
        //
        $user= User::findorfail($id);
        // dd($user);
        foreach ($user->tasks as $name) {
            //
            $names[]=$name->name;
        }
        
        return json_encode($names);
    }
    
    
    public function notify()
    {
        $task= Task::where(['end_date_task'=>'2001-11-18 22:47:25'])->get();
        dd($task->users);
        foreach ($task->users as $email) {
            //
            $emails[]=$email->email;
        }
        
        return json_encode($emails);
        
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
