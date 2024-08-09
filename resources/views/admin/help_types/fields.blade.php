<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('Name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details',  __('Details')) !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
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

<!-- Image Field -->
@isset($helpType)
<img src="{{asset('images/'.$helpType->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image',  __('Image')) !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> '.__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.helpTypes.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
