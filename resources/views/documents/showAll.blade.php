@extends('layout')

@section('content')

    <div class="paginator">
        {{$documents->render()}}
    </div>

    @foreach($documents as $document)


        <div class="box">
            <h4>ID: <i>{{$document->id}}</i></h4>
            <h4>Status: <i>{{$document->status}}</i></h4>
            <p class="payload">{{$document->payload}}</p>
            <h4>
                Created: <i>{{$document->created_at}}</i>
                @php
                    if($document->created_at != $document->updated_at){
                @endphp
                <br/>Updated: <i>{{$document->updated_at}}</i>
                @php
                    }
                @endphp
            </h4><br/>
            <a href="/document/{{$document->id}}/edit" class="button">edit</a>
            <a href="/document/{{$document->id}}/publish" class="button">publish</a>
        </div>


    @endforeach
    <div class="paginator">
        {{$documents->render()}}
    </div>
@endsection
