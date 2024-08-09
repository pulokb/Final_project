@extends('layouts.admin')
@section('title'){{ __('Update') }} {{__('Volunteer')}} @endsection
@section('content')
@include('includes.page_header',['title'=>__('Update')." ".__('Volunteer'),'url'=>route('admin.volunteers.index'),'icon' => $icon??'','permission'=>'Volunteer-view'])
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                   {!! Form::model($volunteer, ['route' => ['admin.volunteers.update', $volunteer->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.volunteers.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

