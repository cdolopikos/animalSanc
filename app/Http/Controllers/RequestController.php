<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Animal;
Use App\Adoption;
Use App\User;

class RequestController extends Controller
{

  // store the information to the database
  public function store(Request $request)
  {
    $adoption = $this->validate(request(),[
      'userId'=>'required',
      'animalId'=>'required',
      'animalName'=>'required',
    ]);

    $adoption = new Adoption;
    $adoption->userId = $request->input('userId');
    $adoption->animalId = $request->input('animalId');
    $adoption->animalName = $request->input('animalName');
    $adoption->save();

    return back()->with('succcess', 'Adoption request made');
  }

  // return the requests view for the admin
  public function index()
  {
    $animal = Animal::all();
    $adoptionsQuery = Adoption::all();
    return view('adoption_requests.viewrequests', array('adoptions'=>$adoptionsQuery, 'animals'=>$animal));
  }

  // return back success when adoption decision has been made and submitted by the admin
  public function review(Request $request, $id)
  {
    $adoptions = Adoption::find($id);
    $animalId = $adoptions->animalId;
    $this->validate(request(), [
      'Outcome' => 'required'
    ]);
    $adoptions->Outcome = $request->input('Outcome');
    $adoptions->save();

    if($adoptions->Outcome == 'Approved')
    {
      $animal = Animal::where('id', "=", $animalId)->first();
      $animal->availability = 'Unavailable';
      $animal->save();

      $other = Adoption::where("animalId", '=', $animalId)->where('Outcome', '=', 'Pending')->get();
      foreach ($other as $info) {
        $info->Outcome = 'Rejected';
        $info->save();
      }
    }
    return back()->with('success', 'Adoption Request has updated');
  }

  // return back the user request in the view for animals, authenticate the exact user
  public function user()
  {
    $animalsQuery = Animal::all();
    $userId = \Auth::user()->id;
    $adoptionsQuery = Adoption::all();
    return view('adoption_requests.userrequests', array('animals'=>$animalsQuery, 'userId'=>$userId, 'adoptions'=>$adoptionsQuery));
  }

  //return back the admins view only for every adoption requests and decision ever made
  public function admin()
  {
    $animalsQuery = Animal::all();
    $users = User::all();
    $adoptionsQuery = Adoption::all();
    return view ('adoption_requests.requests', array('animals'=>$animalsQuery, 'users'=>$users, 'adoptions'=>$adoptionsQuery));
  }
}
