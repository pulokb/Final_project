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


}
