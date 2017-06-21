<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;

class TestController extends Controller
{
	public function test()
	{
    //$students=DB::table('students')->get();

    //return view ('test', compact('students'));

    //$male=DB::table('students')->where('gender', 0)->get();

    //return view ('test', compact('students'));

		$students=Student::all();
    	return view ('test', compact('students'));
	}
}
