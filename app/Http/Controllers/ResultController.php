<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excelone;
use App\Exceltwo;

class ResultController extends Controller
{
	public function index(){
		
		$results = Excelone::all();

		$error  = null;

		foreach ($results as $value) {
			$k = null;
			$t = null;
			$r = null;
			$s = 0;
			$result = $value->zednadebi;
			$two = Exceltwo::where('zednadebi', "$result")->get();
			foreach($two as $v){
				$s = $s + $v->tankha;
			}
			if($value->tankha == ($s * (-1))){
				$error [] = 'უდრის';
			} else {
				$k =  $value->tankha;
				$t = ($s * (-1));
				$r = $result;
				$error [] = 'არ უდრის';
				$error [] = $k;
				$error [] = $t;
				$error [] = $r;
			}
		}

		return view('results', ['error' => $error]);
	}
}
