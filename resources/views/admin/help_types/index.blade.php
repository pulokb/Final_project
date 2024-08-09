@extends('layouts.admin')
@section('title'){{ __('Help Types') }} @endsection
@section('content')
@include('includes.page_header_index',['title'=>__('Help Types'),'url'=>route('admin.helpTypes.create'),'icon' => $icon??'','permission'=>'HelpType-create'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.help_types.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

