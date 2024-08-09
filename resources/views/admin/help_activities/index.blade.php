@extends('layouts.admin')
@section('title'){{ __('Help Activities') }} @endsection
@section('content')
@include('includes.page_header_index',['title'=>__('Help Activities'),'url'=>route('admin.helpActivities.create'),'icon' => $icon??'','permission'=>'HelpActivity-create'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.help_activities.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

