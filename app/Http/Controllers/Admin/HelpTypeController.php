<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\HelpTypeDataTable;
use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Requests\HelpTypeCreateRequest;
use App\Http\Requests\HelpTypeUpdateRequest;
use App\Models\HelpType;
use App\Http\Controllers\AppBaseController;

class HelpTypeController extends AppBaseController
{

    private $icon = 'pe-7s-menu';


    public function index(HelpTypeDataTable $helpTypeDataTable)
    {
        $this->authorize('HelpType-view');
        $icon = $this->icon;
        return $helpTypeDataTable->render('admin.help_types.index',compact('icon'));
    }


    public function create()
    {
        $this->authorize('HelpType-create');
        return view('admin.help_types.create')->with('icon', $this->icon);
    }


    public function store(HelpTypeCreateRequest $request)
    {
        // return $request;
        $this->authorize('HelpType-create');
        // HelpType::create($request->all());
        $imageName = FileHelper::uploadImage($request);
        HelpType::create(array_merge($request->all(), ['image' => $imageName]));
        notify()->success(__("Successfully Created"), __("Success"));
        return redirect(route('admin.helpTypes.index'));
    }


    public function show(HelpType $helpType)
    {
        $this->authorize('HelpType-view');
        return view('admin.help_types.show',compact('helpType'))->with('icon', $this->icon);
    }


    public function edit(HelpType $helpType)
    {
        $this->authorize('HelpType-update');
        return view('admin.help_types.edit',compact('helpType'))->with('icon', $this->icon);
    }


    public function update(HelpType $helpType, HelpTypeUpdateRequest $request)
    {
        $this->authorize('HelpType-update');
        $imageName = FileHelper::uploadImage($request, $helpType);
        $helpType->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        // $helpType->fill($request->all())->save();
        notify()->success(__("Successfully Updated"), __("Success"));
        return redirect(route('admin.helpTypes.index'));
    }


    public function destroy(HelpType $helpType)
    {
        $this->authorize('HelpType-delete');
        FileHelper::deleteImage($helpType);
        $helpType->delete();
    }
}
