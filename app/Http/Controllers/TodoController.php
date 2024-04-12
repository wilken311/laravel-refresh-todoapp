<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $userId = auth()->id(); //Get the current user_id
        $todos = Todo::where('user_id',$userId)->get(); //Get all todos, only for the current logged in user.

        //Another way of getting all todos via User Model.
        // $user = User::find(2);
        // $todos = $user->todos()->get();
      
        return view('todos.index',['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $request->user()->todos()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        
        return redirect('todos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit',['todo'=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = Todo::find($todo->id);
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->save();

        return redirect('todos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
