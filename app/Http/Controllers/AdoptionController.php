<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Adoption;
use App\User;


class AdoptionController extends Controller
{
    public function index(){
      $adoptions = Adoption::all();
      $users = \Auth::user()->username;
      return view('display', array('adoptions'=>$adoptions, 'users'=> $users));
    }
}
