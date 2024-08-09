<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('Name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Profession Field -->
<div class="form-group">
    {!! Form::label('profession', __('Profession')) !!}
    {!! Form::text('profession', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Designation Field -->
<div class="form-group">
    {!! Form::label('designation', __('Designation')) !!}
    {!! Form::text('designation', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Identity Type Field -->
<div class="form-group">
    {!! Form::label('identity_type', __('Identity Type')) !!}
    {!! Form::text('identity_type', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Identity Field -->
<div class="form-group">
    {!! Form::label('identity', __('Identity')) !!}
    {!! Form::text('identity', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __('Phone')) !!}
    {!! Form::text('phone', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('Email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Blood Group Field -->
<div class="form-group">
    {!! Form::label('blood_group', __('Blood Group')) !!}
    {!! Form::text('blood_group', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details',  __('Details')) !!}
    {!! Form::textarea('details', null, ['class' => 'form-control','required']) !!}
</div>


<!-- District Field -->
<div class="form-group">
    {!! Form::label('district', __('District')) !!}
    {!! Form::text('district', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Area Field -->
<div class="form-group">
    {!! Form::label('area', __('Area')) !!}
    {!! Form::text('area', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address',  __('Address')) !!}
    {!! Form::textarea('address', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude',  __('Latitude')) !!}
    {!! Form::number('latitude', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Longtitude Field -->
<div class="form-group">
    {!! Form::label('longtitude',  __('Longtitude')) !!}
    {!! Form::number('longtitude', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Map Address Field -->
<div class="form-group">
    {!! Form::label('map_address',  __('Map Address')) !!}
    {!! Form::textarea('map_address', null, ['class' => 'form-control','required']) !!}
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


<!-- Approval Field -->
<div class="form-group">
    {!! Form::label('approval', __('Approval')) !!}
    {!! Form::text('approval', null, ['class' => 'form-control','required']) !!}
</div>


<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id',  __('User Id')) !!}
    {!! Form::number('user_id', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description',  __('Description')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Interest Field -->
<div class="form-group">
    {!! Form::label('interest',  __('Interest')) !!}
    {!! Form::textarea('interest', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Refer Code Field -->
<div class="form-group">
    {!! Form::label('refer_code', __('Refer Code')) !!}
    {!! Form::text('refer_code', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Referance Field -->
<div class="form-group">
    {!! Form::label('referance', __('Referance')) !!}
    {!! Form::text('referance', null, ['class' => 'form-control','required']) !!}
</div>


<!-- Birth Date Field -->
<div class="form-group ">
    {!! Form::label('birth_date',  __('Birth Date')) !!}
    {!! Form::date('birth_date', null, ['class' => 'form-control','id'=>'birth_date','required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#birth_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Joining Date Field -->
<div class="form-group ">
    {!! Form::label('joining_date',  __('Joining Date')) !!}
    {!! Form::date('joining_date', null, ['class' => 'form-control','id'=>'joining_date','required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#joining_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Image Field -->
@isset($volunteer)
<img src="{{asset('images/'.$volunteer->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('image',  __('Image')) !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>


<!-- Attachment Field -->
@isset($volunteer)
<img src="{{asset('images/'.$volunteer->image)}}" alt="" srcset="">
@endisset
<div class="form-group">
    <br>
    {!! Form::label('attachment',  __('Attachment')) !!}
    {!! Form::file('attachment') !!}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group">
    {{ Form::button('<i class="fas fa-plus-circle"></i> '.__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary '] )  }}
    <a href="{{ route('admin.volunteers.index') }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> {{ __("Cancel") }}</a>
</div>

{{-- @include('includes.ckeditor') --}}
