@extends('layouts.admin')
@section('title'){{ __('Emergency Contacts') }} @endsection
@section('content')
@include('includes.page_header_index',['title'=>__('Emergency Contacts'),'url'=>route('admin.emergencyContacts.create'),'icon' => $icon??'','permission'=>'EmergencyContact-create'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.emergency_contacts.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

