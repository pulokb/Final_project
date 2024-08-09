<!-- Activity Field -->
<div class="form-group">
    {!! Form::label('activity', __('Activity')) !!}
    {!! Form::text('activity', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note',  __('Note')) !!}
    {!! Form::textarea('note', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('Status')) !!}
    {!! Form::text('status', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Help Request Field -->
<div class="form-group">
    {!! Form::label('help_request',  __('Help Request')) !!}
    {!! Form::select('help_request', $help_requestItems, null, ['class' => 'form-control']) !!}
</div>


<!-- Volunteer Field -->
<div class="form-group">
    {!! Form::label('volunteer',  __('Volunteer')) !!}
    {!! Form::select('volunteer', $volunteerItems, null, ['class' => 'form-control']) !!}
</div>


<!-- Image Field -->
@isset($helpActivity)
<img src="{{asset('images/'.$helpActivity->image)}}" alt="" srcset="">
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
    <a href="{{ route('admin.helpActivities.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
