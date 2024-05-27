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

    $fields = [
        'student_q1', 'student_q2', 'student_q3', 'student_q4', 'student_q5',
        'family_q1', 'family_q2', 'family_q3', 'family_q4', 'family_q5',
        'relationship_q1', 'relationship_q2', 'relationship_q3', 'relationship_q4', 'relationship_q5',
        'job_q1', 'job_q2', 'job_q3', 'job_q4', 'job_q5',
        'mental_health_q1', 'mental_health_q2', 'mental_health_q3', 'mental_health_q4', 'mental_health_q5',
    ];

    $rules = [];
    foreach ($fields as $field) {
        $rules[$field] = 'required|max:191|string';
    }

    $request->validate($rules);

    $data = ['user_id' => $user->id ?? 2];
    foreach ($fields as $field) {
        $data[$field] = $request->$field;
    }

    UserQuery::create($data);

    $user_queries = UserQuery::latest()->first();

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


   $suggestions = Suggestions::get();

    return view('frontend.suggestions', compact('suggestions'));
}

public function faq(){
    return view("frontend.faq");
}

public function show(Symptoms $symptom)
    {
        return view('user.blog_show', compact('symptom'));
    }


}
