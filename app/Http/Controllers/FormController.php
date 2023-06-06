<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Dotenv\Exception\ValidationException;

class FormController extends Controller
{
    public function tasks(){
        return view('doc');
    }

    public function forms(){
        return view('form');
    }

    public function form_store(){
        return redirect('success');
    }

    public function store(){
        return redirect('form');
    }

    public function success(){
        session()->flash('success', 'APPLICATION SUBMITTED SUCCESSFULLY');
        return view('success');
    }
}
