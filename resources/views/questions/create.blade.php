@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <h1><u>新規質問投稿画面です</u></h1>
    
        <div class="row">
            <div class="col-xs-6">
                {!! Form::model($question, ['route' => 'questions.store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', '件名を入力') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('question', '質問を入力') !!}
                        {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
                    </div>
                
                    {!! Form::submit('投稿する', ['class' => 'btn btn-primary']) !!}
                
                    {!! link_to_route('questions.index', '質問一覧に戻る', null, ['class' => 'btn btn-primary']) !!}
        
                {!! Form::close() !!}
            </div>
        </div>
    @else
        <h1>セッションが切れました。再度ログインしてやり直してください。</h1>
    @endif
    
@endsection
