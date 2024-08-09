@extends('layouts.admin')
@section('title'){{__('Create')}} {{ __('Help Request') }} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Create')." ". __('Help Request'),'url'=>route('admin.helpRequests.index'),'icon' => $icon??'','permission'=>'HelpRequest-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.helpRequests.store', 'files' => true]) !!}

                        @include('admin.help_requests.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

