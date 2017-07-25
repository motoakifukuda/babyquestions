@extends('layouts.app')

@section('content')

    <h1>id: {{ $question->id }} の質問回答ページ</h1>
    
    @include('commons.error_messages')
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <p>件名：{{ $question->title }}</p>
            </div>
        
            <div class="form-group">
                <p>質問：{{ $question->question }}</p>
            </div>
            
            {!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('answer', '回答:') !!}
                    {!! Form::text('answer', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('回答する', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection