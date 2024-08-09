@extends('layouts.admin')
@section('title'){{ __('View') }} {{__('Emergency Contact')}} {{ __('Details') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('View')." ".__('Emergency Contact'),'url'=>route('admin.emergencyContacts.index'),'icon' => $icon??'','permission'=>'EmergencyContact-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.emergency_contacts.show_fields')
                    <a href="{{ route('admin.emergencyContacts.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> {{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
