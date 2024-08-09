<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\EmergencyContactDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\EmergencyContactCreateRequest;
use App\Http\Requests\EmergencyContactUpdateRequest;
use App\Models\EmergencyContact;
use App\Http\Controllers\AppBaseController;

class EmergencyContactController extends AppBaseController
{

    private $icon = 'pe-7s-menu';


    public function index(EmergencyContactDataTable $emergencyContactDataTable)
    {
        $this->authorize('EmergencyContact-view');
        $icon = $this->icon;
        return $emergencyContactDataTable->render('admin.emergency_contacts.index',compact('icon'));
    }


    public function create()
    {
        $this->authorize('EmergencyContact-create');
        return view('admin.emergency_contacts.create')->with('icon', $this->icon);
    }


    public function store(EmergencyContactCreateRequest $request)
    {
        $this->authorize('EmergencyContact-create');
        // EmergencyContact::create($request->all());
        $imageName = FileHelper::uploadImage($request);
        EmergencyContact::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.emergencyContacts.index'));
    }


    public function show(EmergencyContact $emergencyContact)
    {
        $this->authorize('EmergencyContact-view');
        return view('admin.emergency_contacts.show',compact('emergencyContact'))->with('icon', $this->icon);
    }


    public function edit(EmergencyContact $emergencyContact)
    {
        $this->authorize('EmergencyContact-update');
        return view('admin.emergency_contacts.edit',compact('emergencyContact'))->with('icon', $this->icon);
    }


    public function update(EmergencyContact $emergencyContact, EmergencyContactUpdateRequest $request)
    {
        $this->authorize('EmergencyContact-update');
        $imageName = FileHelper::uploadImage($request, $emergencyContact);
        $emergencyContact->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        // $emergencyContact->fill($request->all())->save();
        notify()->success(__("Successfully Updated"), __("Success"));
        return redirect(route('admin.emergencyContacts.index'));
    }


    public function destroy(EmergencyContact $emergencyContact)
    {
        $this->authorize('EmergencyContact-delete');
        FileHelper::deleteImage($emergencyContact);
        $emergencyContact->delete();
    }
}
