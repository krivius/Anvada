@extends('layout')

@section('content')
    <div class="input-group">
        <form method="post" action="/api/v1/document" name="document">
            @CSRF
            <label for="payload">Payload:</label><br/>
            <textarea name="payload" class="form-control" id="payload" required rows="7" cols="75"></textarea><br/>
            <input type="submit" value="SUBMIT" class="btn btn-secondary">
        </form>
    </div>
@endsection
