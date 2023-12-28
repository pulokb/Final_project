<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;


class PulokController extends Controller
{
    public function query_form(){
        return view("frontend.query_form");
    }

    public function suggestions_symptoms(){

        // $suggestions_base=[
        //     "s1",
        //     "s2",
        //     "s3",
        //     "s4",
        //     "s5",
        //     "s6",
        //     "s7",
        //     "s8",
        // ];
        // $symptoms=["d1","d2","d3"];

        // shuffle($suggestions_base);
        // $suggestions = array_slice($suggestions_base, 0, 4);
        return view("frontend.suggestions_symptoms");
    }


    public function symptoms(){
        return view("frontend.symptoms");
    }
    public function suggestions(){
        return view("frontend.suggestions");
    }

    public function index()
{
    // Your logic to fetch data goes here
    $sliders = []; // Replace this with your logic to fetch slider data from your database or other source
    $introBlog = []; // Replace this with your logic to fetch intro blog data
    $doctorBlogs = []; // Replace this with your logic to fetch doctor blog data
    $doctors = []; // Replace this with your logic to fetch doctor data
    $suggestions = []; // Replace this with your logic to fetch suggestions data
    $symptoms = []; // Replace this with your logic to fetch symptoms data

    return view('frontend.index', compact('sliders', 'introBlog', 'doctorBlogs', 'doctors', 'suggestions', 'symptoms'));
}


}
