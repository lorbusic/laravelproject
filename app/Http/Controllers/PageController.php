<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    protected $title = "Our staff";
    protected $data = [
        [
            "name"=> "Mario",
            "lastName" => "Rossi"
        ],
        [
            "name"=> "Pippo",
            "lastName" => "Pluto"
        ],
        [
            "name"=> "Topolino",
            "lastName" => "Paperino"
        ],
    ];
 
    public function about(){
        return View::make('about');
        //return view('about');
    }


    public function blog(){
        return view('blog');
    }

    public function staff(){
        /*return view('staff',['title'=>'Our staff','staff'=>$this->data]);*/

       /*

        return view('staff')
            ->with('staff',$this->data)
            ->with('title',$this->title);*/

         /*With Eloquent method
            with[Varname](value) is a eloquent function
            that call the variabile written after 'with',
            like in this example with 'staff' variabile.
            You have to write the function with camel-case
            writing 'with' in lower-case and the variabile
            starting with uppercase (i.e.: withStaff).
            It's named 'Eloquent' because it identifies
            the name of the variabile that you want to call.
            Disclaimer: the functions 'withStaff' and 'withTitle'
            are magical functions that don't exist in PHP or
            in any Class of the framework.
         */
         /*return view('staff')
            ->withStaff($this->data)
            ->withTitle($this->title);*/

        $staff = $this->data;
        $title = $this->title;
        return view('staff',compact('staff','title'));
    }
}
