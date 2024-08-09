<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\VolunteerDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\VolunteerCreateRequest;
use App\Http\Requests\VolunteerUpdateRequest;
use App\Models\Volunteer;
use App\Http\Controllers\AppBaseController;

class VolunteerController extends AppBaseController
{

    private $icon = 'pe-7s-menu';


    public function index(VolunteerDataTable $volunteerDataTable)
    {
        $this->authorize('Volunteer-view');
        $icon = $this->icon;
        return $volunteerDataTable->render('admin.volunteers.index',compact('icon'));
    }


    public function create()
    {
        $this->authorize('Volunteer-create');
        return view('admin.volunteers.create')->with('icon', $this->icon);
    }


    public function store(VolunteerCreateRequest $request)
    {
        $this->authorize('Volunteer-create');
        // Volunteer::create($request->all());
        $imageName = FileHelper::uploadImage($request);
        Volunteer::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.volunteers.index'));
    }


    public function show(Volunteer $volunteer)
    {
        $this->authorize('Volunteer-view');
        return view('admin.volunteers.show',compact('volunteer'))->with('icon', $this->icon);
    }


    public function edit(Volunteer $volunteer)
    {
        $this->authorize('Volunteer-update');
        return view('admin.volunteers.edit',compact('volunteer'))->with('icon', $this->icon);
    }


    public function update(Volunteer $volunteer, VolunteerUpdateRequest $request)
    {
        $this->authorize('Volunteer-update');
        $imageName = FileHelper::uploadImage($request, $volunteer);
        $volunteer->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        // $volunteer->fill($request->all())->save();
        notify()->success(__("Successfully Updated"), __("Success"));
        return redirect(route('admin.volunteers.index'));
    }


    public function destroy(Volunteer $volunteer)
    {
        $this->authorize('Volunteer-delete');
        FileHelper::deleteImage($volunteer);
        $volunteer->delete();
    }
}
