<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        //$data = Post::orderBy('id', 'DESC')->get();  
        $data = Post::all();
        return view('home', compact('data'));
    }

    public function new() 
    {
        return view('new');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'desc'  => 'required',
        ]);

        $data = new Post();
        $data->title = $request->title;
        $data->description = $request->desc;
        $data->save($validatedData);
        return redirect('/');
    }

    public function edit($id) 
    {
        $data = Post::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update($id, Request $request) 
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'desc'  => 'required',
        ]);

        $data = Post::findOrFail($id); 
        $data->title = $request->title;
        $data->description = $request->desc;

        $data->save();

        return redirect('/');
    }

    public function delete($id) 
    {   
        Post::findOrFail($id)->delete();
        return redirect('/');
    }
}
