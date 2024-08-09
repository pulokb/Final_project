@extends('layouts.admin')
@section('title'){{ __('Update') }} {{__('Help Type')}} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Update')." ".__('Help Type'),'url'=>route('admin.helpTypes.index'),'icon' => $icon??'','permission'=>'HelpType-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($helpType, ['route' => ['admin.helpTypes.update', $helpType->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.help_types.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

