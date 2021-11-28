<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class CarsController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('cars.index', ['cars'=>$cars]);
    }
}
