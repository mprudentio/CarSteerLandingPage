<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    //
    public function index(){
        return view('trainers', [
            "title" => "Trainers",
            "trainers" => Trainers::paginate(3)
        ]);
    }
}

