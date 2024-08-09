@extends('layouts.admin')
@section('title'){{ __('Update') }} {{__('Emergency Contact')}} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Update')." ".__('Emergency Contact'),'url'=>route('admin.emergencyContacts.index'),'icon' => $icon??'','permission'=>'EmergencyContact-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($emergencyContact, ['route' => ['admin.emergencyContacts.update', $emergencyContact->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.emergency_contacts.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

