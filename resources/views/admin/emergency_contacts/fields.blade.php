<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('Name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Operator Field -->
<div class="form-group">
    {!! Form::label('operator', __('Operator')) !!}
    {!! Form::text('operator', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
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


<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details',  __('Details')) !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
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
    {!! Form::textarea('address', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude',  __('Latitude')) !!}
    {!! Form::number('latitude', null, ['class' => 'form-control','required','step'=>'any']) !!}
</div>


<!-- Longtitude Field -->
<div class="form-group">
    {!! Form::label('longtitude', __('Longtitude')) !!}
    {!! Form::number('longtitude', null, ['class' => 'form-control','required','step'=>'any']) !!}
</div>


<!-- Map Address Field -->
<div class="form-group">
    {!! Form::label('map_address',  __('Map Address')) !!}
    {!! Form::textarea('map_address', null, ['class' => 'form-control','required','maxlength' => 191]) !!}
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('Status')) !!}
    {!! Form::text('status', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('Type')) !!}
    {!! Form::text('type', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Image Field -->
@isset($emergencyContact)
<img src="{{asset('images/'.$emergencyContact->image)}}" alt="" srcset="">
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
    <a href="{{ route('admin.emergencyContacts.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
