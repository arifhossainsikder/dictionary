@extends('layouts.admin')


@section('content')
    <h3>All Words</h3>
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" id="search">
        </div>
        <div id="wordList">

        </div>
        {{ csrf_field() }}
    </form>

    <div class="col-md-12">
        @if(session()->has('message.level'))
            <div class="alert alert-{{ session('message.level') }}">
                {!! session('message.content') !!}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
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


@section('scripts')

    <script>
        $(document).ready(function () {
            $('#search').keyup(function () {
                var query = $(this).val();
                if (query != ''){

                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('search.admin') }}",
                        method: "POST",
                        data: {query: query, _token: _token},
                        success: function (data) {
                            $('#wordList').fadeIn();
                            $('#wordList').html(data);
                        }
                    });

                } else{
                    $('#wordList').css("display", "none");
                }
            });

        });
    </script>

@endsection