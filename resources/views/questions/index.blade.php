@extends('layouts.app')

@section('content')

    @if (Auth::check())

        <h1><u>質問一覧画面です</u></h1>

        @if (count($questions) > 0)
            <h4>idのリンクをクリックすると詳細ページへ遷移します</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>件名</th>
                        <th>投稿者</th>
                        <th>回答者</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                        <tr>
                            <td>{!! link_to_route('questions.show', $question->id, ['id' => $question->id]) !!}</td>
                            <td>{{ $question->title }}</td>
                            <td>{{ $question->asked_name }}</td>
                            <td>{{ $question->answered_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif (count($questions) == 0)
            <h4><strong>現在質問の投稿がありません</strong></h4>
        @endif

        <h4>新規質問の投稿は下記ボタンよりお願いします</h4>
    
        {!! link_to_route('questions.create', '新規質問の投稿', null, ['class' => 'btn btn-primary']) !!}

    @else
        <h1>セッションが切れました。再度ログインしてやり直してください。</h1>
    @endif

@endsection
