@php
    use App\Models\User;
    use App\Models\UserQuery;
    $users=User::get()->pluck("name","id");
    $queries=UserQuery::get()->pluck("note","id");

@endphp

<!-- User Queries Id Field -->
<div class="form-group">
    {!! Form::label('user_queries_id',  __('User Queries Id')) !!}
    {!! Form::select('user_queries_id',$queries, null, ['class' => 'form-control','required']) !!}
</div>


<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id',  __('User Id')) !!}
    {!! Form::select('user_id',$users, null, ['class' => 'form-control','required']) !!}
</div>


<!-- Admin Id Field -->
<div class="form-group">
    {!! Form::label('admin_id',  __('Admin Id')) !!}
    {!! Form::select('admin_id',$users, null, ['class' => 'form-control','required']) !!}
</div>


<!-- Symptoms Field -->
<div class="form-group">
    {!! Form::label('symptoms',  __('Symptoms')) !!}
    {!! Form::textarea('symptoms', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Suggestions Field -->
<div class="form-group">
    {!! Form::label('suggestions',  __('Suggestions')) !!}
    {!! Form::textarea('suggestions', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', __('Note')) !!}
    {!! Form::text('note', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> '.__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.doctorFeedbacks.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
