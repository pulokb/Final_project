@extends('layouts.admin')
@section('title'){{__('Create')}} {{ __('Emergency Contact') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Create')." ". __('Emergency Contact'),'url'=>route('admin.emergencyContacts.index'),'icon' => $icon??'','permission'=>'EmergencyContact-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.emergencyContacts.store', 'files' => true]) !!}

                        @include('admin.emergency_contacts.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

