@extends('layouts.app')

@section('content')

    <h1>質問一覧</h1>

    @if (count($questions) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>件名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{!! link_to_route('questions.show', $question->id, ['id' => $question->id]) !!}</td>
                        <td>{{ $question->title }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('questions.create', '新規質問の投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
