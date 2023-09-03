<?php

namespace App\Http\Controllers;

use App\Models\CarTypes;
use App\Models\Trainers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $trainerId = [7,8,9];
        $carsId=[8,9,10];
        return view('home',[
            "title"=>"Home", 
            'trainers'=>Trainers::whereIn('id',$trainerId)->get(),
            'cars'=>CarTypes::whereIn('id',$carsId)->get()
        ]);
    }
}
