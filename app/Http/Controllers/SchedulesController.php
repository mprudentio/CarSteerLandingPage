<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    //
    public function index(){
        return view('schedules', [
            "title" => "Schedules",
            "schedules" => Schedules::all()
        ]);
    }
}
