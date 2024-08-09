<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\HelpActivityDataTable;
use App\Http\Requests;
use App\Http\Requests\HelpActivityCreateRequest;
use App\Http\Requests\HelpActivityUpdateRequest;
use App\Models\HelpActivity;
use App\Http\Controllers\AppBaseController;

class HelpActivityController extends AppBaseController
{

    private $icon = 'pe-7s-menu';


    public function index(HelpActivityDataTable $helpActivityDataTable)
    {
        $this->authorize('HelpActivity-view');
        $icon = $this->icon;
        return $helpActivityDataTable->render('admin.help_activities.index',compact('icon'));
    }


    public function create()
    {
        $this->authorize('HelpActivity-create');
        return view('admin.help_activities.create')->with('icon', $this->icon);
    }


    public function store(HelpActivityCreateRequest $request)
    {
        $this->authorize('HelpActivity-create');
        HelpActivity::create($request->all());
        //$imageName = FileHelper::uploadImage($request);
        //HelpActivity::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.helpActivities.index'));
    }


    public function show(HelpActivity $helpActivity)
    {
        $this->authorize('HelpActivity-view');
        return view('admin.help_activities.show',compact('helpActivity'))->with('icon', $this->icon);
    }


    public function edit(HelpActivity $helpActivity)
    {
        $this->authorize('HelpActivity-update');
        return view('admin.help_activities.edit',compact('helpActivity'))->with('icon', $this->icon);
    }


    public function update(HelpActivity $helpActivity, HelpActivityUpdateRequest $request)
    {
        $this->authorize('HelpActivity-update');
        // $imageName = FileHelper::uploadImage($request, $helpActivity);
        // $helpActivity->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        $helpActivity->fill($request->all())->save();
        notify()->success(__("Successfully Updated"), __("Success"));
        return redirect(route('admin.helpActivities.index'));
    }


    public function destroy(HelpActivity $helpActivity)
    {
        $this->authorize('HelpActivity-delete');
        //FileHelper::deleteImage($helpActivity);
        $helpActivity->delete();
    }
}
