@extends('layouts.admin')
@section('title'){{ __('View') }} {{__('Help Request')}} {{ __('Details') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('View')." ".__('Help Request'),'url'=>route('admin.helpRequests.index'),'icon' => $icon??'','permission'=>'HelpRequest-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    @include('admin.help_requests.show_fields')
                    <a href="{{ route('admin.helpRequests.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> {{ __('Back') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
