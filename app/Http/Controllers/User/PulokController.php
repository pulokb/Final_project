<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\UserQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PulokController extends Controller
{
    public function query_form(){
        return view("frontend.query_form");
    }

    public function suggestions_symptoms(Request $request)
    {
        $user = auth()->user();

        UserQuery::create([
            'user_id' => $user->id ?? 2,
            'age' => $request->age,
            'gender' => $request->gender,
            'physical_rating' => $request->physical_health_rating,
            'mental_rating' => $request->mental_health_rating,
            'dailylife_problems' => $request->physical_health_problems,
            'work_dailylife_problems' => $request->emotional_problems,
            'affected_ability' => $request->mental_health_effect_on_work,
            'low_down' => $request->felt_low_for_2_weeks,
            'affected_relationship' => $request->mental_health_effect_on_relationships,
            'experience' => $request->experience_frequency,
            'note' => $user->name ?? "pulok",
            // Add other fields as needed
        ]);

         $user_queries = UserQuery::latest()->get()->first();


        return view("frontend.suggestions_symptoms", compact("user_queries"));
    }

    public function symptoms(){
        return view("frontend.symptoms");
    }
    public function suggestions(){
        return view("frontend.suggestions");
    }

}
