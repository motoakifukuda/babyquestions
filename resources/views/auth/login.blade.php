@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ログイン画面です</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'E-mailアドレスを入力') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワードを入力') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログインする', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            <p>ユーザ登録はお済みですか？ {!! link_to_route('signup.get', 'ユーザ登録はこちら') !!}</p>
        </div>
    </div>
@endsection
