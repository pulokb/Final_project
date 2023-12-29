<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id',  __('User Id')) !!}
    {!! Form::number('user_id', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', __('Username')) !!}
    {!! Form::text('username', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('Title')) !!}
    {!! Form::text('title', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', __('Details')) !!}
    {!! Form::text('details', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Image Field -->
@isset($suggestions)
<img src="{{asset('images/'.$suggestions->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image',  __('Image')) !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>


<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', __('Note')) !!}
    {!! Form::text('note', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> '.__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.suggestions.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
