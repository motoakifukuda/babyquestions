@extends('layouts.app')

@section('content')

    @if (Auth::check())

        <h1><u>id: {{ $question->id }} の質問回答画面です</u></h1>
    
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <p>件名：{{ $question->title }}</p>
                </div>

                <div class="form-group">
                    <p>質問者：{{ $question->asked_name }}</p>
                </div>
        
                <div class="form-group">
                    <p>質問：{{ $question->question }}</p>
                </div>
            
                <div class="form-group">
                    <p>回答者：{{ \Auth::user()->name }}</p>
                </div>
            
                {!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'put']) !!}
                
                    <div class="form-group">
                        {!! Form::label('answer', '回答を入力') !!}
                        {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
                    </div>
        
                    {!! Form::submit('回答する', ['class' => 'btn btn-primary']) !!}
                
                    {!! link_to_route('questions.index', '質問一覧に戻る', null, ['class' => 'btn btn-primary']) !!}
        
                {!! Form::close() !!}
            </div>
        </div>
    @else
        <h1>セッションが切れました。再度ログインしてやり直してください。</h1>
    @endif
    
@endsection
