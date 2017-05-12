@extends('layouts.default')
@section('title', $user->name)
@section('content')
    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
        <div class="b-inner-page-header__content">
            <div class="container">
                <h1 class="f-primary-l c-default">hello  {{ $user->name }}</h1>
            </div>
        </div>
    </div>
    <div class="l-main-container">
        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><a
                                href="#">{{ $user->name }}</a></li>
                </ul>
            </div>
        </div>
        <div class="l-inner-page-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        @include('errors.error')
                        <h4 class="f-primary-b text-center">
                            You are the {{ $user->user_id }}th user for my blog</h4>
                        <h4 class="f-primary-b b-h4-special f-h4-special--gray text-center">
                            {{ $user->name }}</h4>
                        <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special text-center">
                            {{ $user->email }}</h4>
                        <div class="text-center"> <a type="button" class="f-tag b-tag" href="/">RETURN HOME</a></div>
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="text-center">
                                <button class="f-tag b-tag" type="submit" name="button">LOG OUT
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop