<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\UserQuery;
use App\Models\Symptoms;
use App\Models\Suggestions;
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
            'physical_health' => $request->physical_health,
            'mental_health' => $request->mental_health,
            'therapist' => $request->therapist,
            'medication' => $request->medication,
            'sleep_hours' => $request->sleep_hours,
            'sleep_quality' => $request->sleep_quality,
            'relationship_status' => $request->relationship_status,
            'current_relationship' => $request->current_relationship,
            'smoking_frequency' => $request->smoking_frequency,
            'drinking_frequency' => $request->drinking_frequency,
            'job_change' => $request->job_change,
            'routine_change' => $request->routine_change,
            'tough_emotional' => $request->tough_emotional,
            // Add other fields as needed
        ]);

         $user_queries = UserQuery::latest()->get()->first();


        return view("frontend.suggestions_symptoms", compact("user_queries"));
    }

    public function symptoms(Request $request)
{
    $user = auth()->user();

    // Symptoms::create([
    //     'user_id' => $user->id ?? 2,
    //     'username' => $user->name ?? "pulok",
    //     'title' => $request->input('title'), // Assuming title is sent in the request
    //     'details' => $request->input('content'), // Assuming content is sent in the request
    //     'image' => $request->input('image_path'), // Assuming image_path is sent in the request
    //     'note' => $user->name ?? "pulok",
    // ]);

    // Fetch symptoms from the database
    $symptoms = Symptoms::get();

    return view('frontend.symptoms', compact('symptoms'));
}

public function suggestions(Request $request)
{
    // return $request;
    $user = auth()->user();

    // Suggestions::create([
    //     'user_id' => $user->id ?? 2,
    //     'username' => $user->name ?? "pulok",
    //     'title' => $request->input('title'), // Assuming title is sent in the request
    //     'details' => $request->input('content'), // Assuming content is sent in the request
    //     'image' => $request->input('image_path'), // Assuming image_path is sent in the request
    //     'note' => $user->name ?? "pulok",
    // ]);

    // Fetch suggestions from the database
   $suggestions = Suggestions::get();

    return view('frontend.suggestions', compact('suggestions'));
}

public function faq(){
    return view("frontend.faq");
}

public function details(int $id)
{
    $symptom = Symptoms::findOrFail($id); // Assuming your model is named BlogPost
    return view('frontend.blogdetails', compact('symptom'));

}


}
