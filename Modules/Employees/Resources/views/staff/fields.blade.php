<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::textarea('facebook', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    {!! Form::textarea('linkedin', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonenumber', 'Phonenumber:') !!}
    {!! Form::text('phonenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Skype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skype', 'Skype:') !!}
    {!! Form::text('skype', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Datecreated Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datecreated', 'Datecreated:') !!}
    {!! Form::date('datecreated', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_image', 'Profile Image:') !!}
    {!! Form::text('profile_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_ip', 'Last Ip:') !!}
    {!! Form::text('last_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_login', 'Last Login:') !!}
    {!! Form::date('last_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Password Change Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_password_change', 'Last Password Change:') !!}
    {!! Form::date('last_password_change', null, ['class' => 'form-control']) !!}
</div>

<!-- New Pass Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('new_pass_key', 'New Pass Key:') !!}
    {!! Form::text('new_pass_key', null, ['class' => 'form-control']) !!}
</div>

<!-- New Pass Key Requested Field -->
<div class="form-group col-sm-6">
    {!! Form::label('new_pass_key_requested', 'New Pass Key Requested:') !!}
    {!! Form::date('new_pass_key_requested', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin', 'Admin:') !!}
    {!! Form::number('admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::number('role', null, ['class' => 'form-control']) !!}
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::number('active', null, ['class' => 'form-control']) !!}
</div>

<!-- Default Language Field -->
<div class="form-group col-sm-6">
    {!! Form::label('default_language', 'Default Language:') !!}
    {!! Form::text('default_language', null, ['class' => 'form-control']) !!}
</div>

<!-- Media Path Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('media_path_slug', 'Media Path Slug:') !!}
    {!! Form::text('media_path_slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Not Staff Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_not_staff', 'Is Not Staff:') !!}
    {!! Form::number('is_not_staff', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.staff.index') !!}" class="btn btn-default">Cancel</a>
</div>
