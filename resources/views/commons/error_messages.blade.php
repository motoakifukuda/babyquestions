@if (count($errors) > 0)
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">以下のエラーが発生しました</h3>
        </div>
    <div class="panel-body">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </ul>
    </div>    
@endif
