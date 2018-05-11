<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
use App\Exceltwo;

class ExcelTwoController extends Controller
{
    public function importExcelFile(){
    	set_time_limit(300);
    	$file = Input::file('file');
    	$file_name = $file->getClientOriginalName();
    	$file->move('files', $file_name);
    	$results = Excel::load('files/'.$file_name, function ($reader){
    		$reader->all();
    	})->get();

    	foreach ($results as  $value) {
    		$data = [
	            'zednadebi' => $value->a,
	            'tankha' => $value->b,
	        ];

	        Exceltwo::create($data);
    	}
    	return view('result');
    }

   
}
