@extends('layouts.admin')
@section('title'){{ __('View') }} {{__('Volunteer')}} {{ __('Details') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('View')." ".__('Volunteer'),'url'=>route('admin.volunteers.index'),'icon' => $icon??'','permission'=>'Volunteer-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.volunteers.show_fields')
                    <a href="{{ route('admin.volunteers.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> {{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
