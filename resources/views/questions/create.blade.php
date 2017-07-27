@extends('layouts.app')

@section('content')

    <h1>新規質問投稿画面です</h1>
    
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($question, ['route' => 'questions.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('title', '件名:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('question', '質問:') !!}
                    {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿する', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection
