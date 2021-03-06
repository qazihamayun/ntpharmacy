@extends('layout_login.default')

@section('content')

    <div class="content">
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="#" method="post" style="display: block;">
                {!! csrf_field() !!}
                    <h3>Forget Password ?</h3>
                    
                    <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter your e-mail address below to reset your password.</span>
                    </div>
                    @include('layout.notification')
                    
                    <p>Enter your e-mail address below to reset your password.</p>
                    <div class="form-group">
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
                    </div>
                    <div class="form-actions">
                        <button type="button" id="back-btn" class="btn btn-default" onclick="window.location = '/auth/login'">Back to Login</button>
                            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                    </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
    </div>

@stop