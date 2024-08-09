<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\HelpRequestDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\HelpRequestCreateRequest;
use App\Http\Requests\HelpRequestUpdateRequest;
use App\Models\HelpRequest;
use App\Http\Controllers\AppBaseController;

class HelpRequestController extends AppBaseController
{

    private $icon = 'pe-7s-menu';


    public function index(HelpRequestDataTable $helpRequestDataTable)
    {
        $this->authorize('HelpRequest-view');
        $icon = $this->icon;
        return $helpRequestDataTable->render('admin.help_requests.index',compact('icon'));
    }


    public function create()
    {
        $this->authorize('HelpRequest-create');
        return view('admin.help_requests.create')->with('icon', $this->icon);
    }


    public function store(HelpRequestCreateRequest $request)
    {
        $this->authorize('HelpRequest-create');
        // HelpRequest::create($request->all());
        $imageName = FileHelper::uploadImage($request);
        $fileName = FileHelper::uploadFile($request);
        HelpRequest::create(array_merge($request->all(), ['image' => $imageName,'video' => $fileName,]));
        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.helpRequests.index'));
    }


    public function show(HelpRequest $helpRequest)
    {
        $this->authorize('HelpRequest-view');
        return view('admin.help_requests.show',compact('helpRequest'))->with('icon', $this->icon);
    }


    public function edit(HelpRequest $helpRequest)
    {
        $this->authorize('HelpRequest-update');
        return view('admin.help_requests.edit',compact('helpRequest'))->with('icon', $this->icon);
    }


    public function update(HelpRequest $helpRequest, HelpRequestUpdateRequest $request)
    {
        $this->authorize('HelpRequest-update');
        $imageName = FileHelper::uploadImage($request, $helpRequest);
        $fileName = FileHelper::uploadFile($request);
        $helpRequest->fill(array_merge($request->all(), ['image' => $imageName,'video' => $fileName,]))->save();
        // $helpRequest->fill($request->all())->save();
        notify()->success(__("Successfully Updated"), __("Success"));
        return redirect(route('admin.helpRequests.index'));
    }


    public function destroy(HelpRequest $helpRequest)
    {
        $this->authorize('HelpRequest-delete');
        FileHelper::deleteImage($helpRequest);
        $helpRequest->delete();
    }
}
