<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DoctorFeedbackDataTable;
use App\Http\Requests;
use App\Http\Requests\DoctorFeedbackCreateRequest;
use App\Http\Requests\DoctorFeedbackUpdateRequest;
use App\Models\DoctorFeedback;
use App\Http\Controllers\AppBaseController;

class DoctorFeedbackController extends AppBaseController
{

    private $icon = 'pe-7s-menu';


    public function index(DoctorFeedbackDataTable $doctorFeedbackDataTable)
    {
        $this->authorize('DoctorFeedback-view');
        $icon = $this->icon;
        return $doctorFeedbackDataTable->render('admin.doctor_feedbacks.index',compact('icon'));
    }


    public function create()
    {
        $this->authorize('DoctorFeedback-create');
        return view('admin.doctor_feedbacks.create')->with('icon', $this->icon);
    }


    public function store(DoctorFeedbackCreateRequest $request)
    {
        $this->authorize('DoctorFeedback-create');
        DoctorFeedback::create($request->all());
        //$imageName = FileHelper::uploadImage($request);
        //DoctorFeedback::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.doctorFeedbacks.index'));
    }


    public function show(DoctorFeedback $doctorFeedback)
    {
        $this->authorize('DoctorFeedback-view');
        return view('admin.doctor_feedbacks.show',compact('doctorFeedback'))->with('icon', $this->icon);
    }


    public function edit(DoctorFeedback $doctorFeedback)
    {
        $this->authorize('DoctorFeedback-update');
        return view('admin.doctor_feedbacks.edit',compact('doctorFeedback'))->with('icon', $this->icon);
    }


    public function update(DoctorFeedback $doctorFeedback, DoctorFeedbackUpdateRequest $request)
    {
        $this->authorize('DoctorFeedback-update');
        // $imageName = FileHelper::uploadImage($request, $doctorFeedback);
        // $doctorFeedback->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        $doctorFeedback->fill($request->all())->save();
        notify()->success(__("Successfully Updated"), __("Success"));
        return redirect(route('admin.doctorFeedbacks.index'));
    }


    public function destroy(DoctorFeedback $doctorFeedback)
    {
        $this->authorize('DoctorFeedback-delete');
        //FileHelper::deleteImage($doctorFeedback);
        $doctorFeedback->delete();
    }
}
