<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excelone;
use App\Exceltwo;

class HomeController extends Controller
{
    public function index(){
    	Excelone::truncate();
    	Exceltwo::truncate();

    	return view('home');
    }
}
