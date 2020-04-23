@extends('layout')

@section('content')
    <h4>ID: <i>{{$document->id}}</i></h4>
    <div class="input-group">
        <form method="POST" action="/api/v1/document/{{$document->id}}" name="document">
            @CSRF
            @method('PATCH')

            <label for="payload">Payload:</label><br/>
            <textarea name="payload" class="form-control" id="payload" required rows="7" cols="75">{{$document->payload}}</textarea><br/>
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control selectpicker" {{$document->status == 'published'? 'disabled="disabled"' : ''}}>
                <option value="draft" {{$document->status == 'draft' ? 'selected="selected"':''}}>draft</option>
                <option value="published" {{$document->status == 'published' ? 'selected="selected"':''}}>published</option>
            </select><br/>
            <input type="submit" value="SUBMIT" class="btn btn-secondary">

        </form>
    </div>
@endsection
