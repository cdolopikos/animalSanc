<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
{
    public function index(){
      $animals = Animal::all();
      return view('layouts.userApp', array('animals' => $animals));
    }
}
