@extends('layout_login.default')

@section('content')
<div class="content">
    
    <!-- BEGIN REGISTRATION FORM -->
    <form class="login-form" action="/auth/register" method="post">
            <h3>Password Reset</h3>
            {!! csrf_field() !!}
            <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{{ old('email') }}"/>
            </div>
            <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
            </div>
            <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation"/>
            </div>
            <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
                    <button type="submit" id="" class="btn btn-success uppercase pull-right">Reset Password</button>
            </div>
    </form>
    <!-- END REGISTRATION FORM -->
    
</div>
@stop
