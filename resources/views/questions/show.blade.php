@extends('layouts.app')

@section('content')

    <h1><u>id = {{ $question->id }} の質問詳細画面です</u></h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $question->id }}</td>
        </tr>
        <tr>
            <th>件名</th>
            <td>{{ $question->title }}</td>
        </tr>
        <tr>
            <th>質問者</th>
            <td>{{ $question->asked_name }}</td>
        </tr>
        <tr>
            <th>質問</th>
            <td>{{ $question->question }}</td>
        </tr>
        <tr>
            <th>回答者</th>
            <td>{{ $question->answered_name }}</td>
        </tr>
        <tr>
            <th>回答</th>
            <td>{{ $question->answer }}</td>
        </tr>
    </table>
    
    {!! link_to_route('questions.index', '質問一覧に戻る', ['id' => $question->id], ['class' => 'btn btn-primary']) !!}
    
    @if (Auth::user()->name != $question->asked_name && $question->answered_name == NULL || Auth::user()->name == $question->answered_name)
        {!! link_to_route('questions.edit', 'この質問に回答する', ['id' => $question->id], ['class' => 'btn btn-primary']) !!}
    @endif
   
    @if (Auth::user()->name == $question->asked_name)
        {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}
            {!! Form::submit('この質問を削除する', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif

@endsection
