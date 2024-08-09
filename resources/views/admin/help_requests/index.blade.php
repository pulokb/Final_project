@extends('layouts.admin')
@section('title'){{ __('Help Requests') }} @endsection
@section('content')
@include('includes.page_header_index',['title'=>__('Help Requests'),'url'=>route('admin.helpRequests.create'),'icon' => $icon??'','permission'=>'HelpRequest-create'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.help_requests.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

