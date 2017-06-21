<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about_us()
    {
    	return view('about');   
    }

    public function child()
    {
    	return view('child');   
    }

    public function ichi()
    {
    	return view('ichi'); 
    }

    public function nii()
    {
    	return view('nii'); 
    }

    public function san()
    {
    	return view('san'); 
    }

    public function yon()
    {
    	return view('yon'); 
    }

    public function go()
    {
    	return view('go'); 
    }

    public function roku()
    {
        return view('roku'); 
    }

    public function myFunction()
    {
        $num1 = 6;
        $num2 = 2;
        $addition = ($num1 + $num2);
        $substraction = ($num1 - $num2);
        $multiplication = ($num1 * $num2);
        $division = ($num1 / $num2);


        return view('myFunction', compact('num1','num2','addition','substraction','multiplication','division'));

    }

    public function myArray()
    {
        $ars= array(1,2,3,4,5);
        return view('myArray', compact('ars'));
    }


}
