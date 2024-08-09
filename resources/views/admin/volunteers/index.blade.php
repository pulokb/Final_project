@extends('layouts.admin')
@section('title'){{ __('Volunteers') }} @endsection
@section('content')
@include('includes.page_header_index',['title'=>__('Volunteers'),'url'=>route('admin.volunteers.create'),'icon' => $icon??'','permission'=>'Volunteer-create'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.volunteers.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

