@extends('layouts.admin')
@section('title'){{ __('Update') }} {{__('Help Activity')}} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Update')." ".__('Help Activity'),'url'=>route('admin.helpActivities.index'),'icon' => $icon??'','permission'=>'HelpActivity-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($helpActivity, ['route' => ['admin.helpActivities.update', $helpActivity->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.help_activities.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

