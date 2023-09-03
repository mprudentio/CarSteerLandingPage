<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    //
    public function index(){
        return view('packages', [
            "title" => "Packages",
            "packages" => Packages::all()
        ]);
    }
}
