@extends('layouts.admin')
@section('title'){{__('Create')}} {{ __('Help Type') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Create')." ". __('Help Type'),'url'=>route('admin.helpTypes.index'),'icon' => $icon??'','permission'=>'HelpType-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.helpTypes.store', 'files' => true]) !!}

                        @include('admin.help_types.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

