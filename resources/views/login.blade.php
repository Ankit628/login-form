@extends('layout')


@push('styles')

<link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Merienda:700&display=swap" rel="stylesheet">
<link href="{{ asset('/css/form.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">

@endpush

@section('login')
<section class="form-section">
    <div class="container">
        <div class="login-form">
            <div class="form-wrapper">
                <div class="form-header">
                    <h1>Login Form</h1>
                </div>
                <form action="login/config" method="post">
                    <div class="form-group">
                        {{ csrf_field()}}
                        <input type="email" name="Email" placeholder="email" value="" required>
                    </div>
                    <div class="form-group">
                        {{ csrf_field()}}
                        <input type="Password" name="Password" placeholder="Password" value="" required>
                    </div>
                    <div class="form-footer">
                        <div class="form-group">
                            <button type="submit">Login</button>
                        </div>
                        <div class="form-group">
                            <div class="form-missing-info">
                                <span class="f-password">Forgot <a href="#">password?</a></span>
                                <span class="sign-up"><a href="#">Register now?</a></span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{ csrf_field()}}
                            <input type="checkbox" name="remember"> Remember me
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection