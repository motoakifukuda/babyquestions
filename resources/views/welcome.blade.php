@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ログアウトしてやり直してください</h1>
                {!! link_to_route('logout.get', '今すぐログアウトする', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ようこそBaby Questionsへ！</h1>
                {!! link_to_route('signup.get', '今すぐユーザ登録する', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
