<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('Title')) !!}
    {!! Form::text('title', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details',  __('Details')) !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('Name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('Phone')) !!}
    {!! Form::text('phone', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('Email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- District Field -->
<div class="form-group">
    {!! Form::label('district', __('District')) !!}
    {!! Form::text('district', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', __('Area')) !!}
    {!! Form::text('area', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address',  __('Address')) !!}
    {!! Form::textarea('address', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Help Type Field -->
<div class="form-group">
    {!! Form::label('help_type',  __('Help Type')) !!}
    {!! Form::select('help_type', $help_typeItems, null, ['class' => 'form-control']) !!}
</div>


<!-- Image Field -->
@isset($helpRequest)
<img src="{{asset('images/'.$helpRequest->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image',  __('Image')) !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>


<!-- Video Field -->
@isset($helpRequest)
<img src="{{asset('images/'.$helpRequest->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('video',  __('Video')) !!}
    {!! Form::file('video') !!}
</div>
<div class="clearfix"></div>



@php
    $priorities = [
        'Emergency'=>'Emergency',
        'High'=>'High',
        'Moderate'=>'Moderate',
        'Casual'=>'Casual',
        'Resolved'=>'Resolved',
        'Cancelled'=>'Cancelled',
        'Fake'=>'Fake',
        'Testing'=>'Testing',
    ];
@endphp
<!-- Priority Field -->
<div class="form-group">
    {!! Form::label('priority', __('Priority')) !!}
    {!! Form::select('priority', $priorities,$helpRequest->priority??null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


@php
    $statuses = [
        'inactive'=>'Inactive',
        'active'=>'Active',
    ];
@endphp
<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('Status')) !!}
    {!! Form::select('status', $statuses,$helpRequest->status??null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>

<!-- Resolve Time Field -->
<div class="form-group ">
    {!! Form::label('resolve_time',  __('Resolve Time')) !!}
    {!! Form::date('resolve_time', null, ['class' => 'form-control','id'=>'resolve_time','required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#resolve_time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> '.__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.helpRequests.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
