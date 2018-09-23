@extends('layouts.admin')


@section('content')
    <h3>All Words</h3>
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Synonyms</th>
                <th>Quotes</th>
                <th>Definition</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($words)
                @foreach($words as $word)
                    <tr>
                        <td>{{$word->id}}</td>
                        <td><a href="{{route('words.edit',$word->id)}}">{{$word->title}}</a></td>
                        <td>{{$word->synonyms}}</td>
                        <td>{{$word->quotes}}</td>
                        <td>{{$word->definition}}</td>
                        @if($word->created_at !== null)
                            <td>{{$word->created_at->diffForHumans()}}</td>
                        @endif
                        @if($word->updated_at !== null)
                            <td>{{$word->updated_at->diffForHumans()}}</td>
                        @endif

                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>


    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{$words->render()}}
        </div>
    </div>
@endsection