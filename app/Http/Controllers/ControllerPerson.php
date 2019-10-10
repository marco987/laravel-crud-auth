<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class ControllerPerson extends Controller
{
  public function index() {
    
    $people = Person::all();

    return view('home', compact('people'));
  }
}
