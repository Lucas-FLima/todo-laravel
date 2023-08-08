<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $r)
    {

    }

    public function create(Request $r)
    {
        return view('tasks.create');
    }
    
    public function edit(Request $r)
    {
        return view('tasks.edit');
    }

    public function delete(Request $r)
    {
        // Deleta e volta para a home
        return redirect(route('home'));
    }
    

}
