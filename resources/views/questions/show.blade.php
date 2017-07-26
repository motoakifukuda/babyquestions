@extends('layouts.app')

@section('content')

    <h1>id = {{ $question->id }} の質問詳細ページ</h1>
    
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
    
    {!! link_to_route('questions.edit', 'この質問に回答する', ['id' => $question->id], ['class' => 'btn btn-primary']) !!}

@endsection
