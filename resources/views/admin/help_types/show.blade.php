@extends('layouts.admin')
@section('title'){{ __('View') }} {{__('Help Type')}} {{ __('Details') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('View')." ".__('Help Type'),'url'=>route('admin.helpTypes.index'),'icon' => $icon??'','permission'=>'HelpType-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.help_types.show_fields')
                    <a href="{{ route('admin.helpTypes.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> {{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
