@extends('layouts.default')
@section('title', 'sign Up')
@section('content')
    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default">SIGN UP</h1>
            </div>
        </div>
    </div>
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="/signup">sign Up</a></li>
                </ul>
            </div>
        </div>

        <div class="l-inner-page-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        @include('errors.error')
                        <form method="POST" action="{{ route('users.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">
                                    NAME</h4>
                                <input type="text" name="name" class="form-control"
                                       value="{{ old('name') }}" placeholder="Enter your name">
                            </div>

                            <div class="form-group">
                                <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">
                                    EMAIL</h4>
                                <input type="text" name="email" class="form-control"
                                       value="{{ old('email') }}" placeholder="Enter your Email">
                            </div>

                            <div class="form-group">
                                <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">
                                    PASSWORD</h4>
                                <input type="password" name="password" class="form-control"
                                       value="{{ old('password') }}"
                                       placeholder="Enter your password">
                            </div>

                            <div class="form-group">
                                <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">
                                    CONFIRM PASSWORD</h4>
                                <input type="password" name="password_confirmation"
                                       class="form-control"
                                       value="{{ old('password_confirmation') }}"
                                       placeholder="Confirm your password">
                            </div>

                            <button type="submit" class="f-tag b-tag">SIGN UP</button>
                            <a type="button" class="f-tag b-tag" href="/">CANCEL</a>
                        </form>
                        <p>ALREADY HAVE ACCOUNT？<a href="{{ route('loginPage') }}">LOG IN NOW！</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop