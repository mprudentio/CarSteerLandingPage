<?php

namespace App\Http\Controllers;

use App\Models\CarTypes;
use Illuminate\Http\Request;

class CarTypesController extends Controller
{
    //
    public function index(){
        return view('cartypes', [
            "title" => "Car Types",
            "cartypes" => CarTypes::paginate(3)
        ]);
    }
}
