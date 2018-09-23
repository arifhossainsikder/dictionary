@extends('layouts.front-home')

@section('content')

    <div class="container wow fadeInUp delay-03s">
        <div class="row">
            <div class="logo text-center">
                <a href="{{ route('front') }}"><img src="/images/logo.png" alt="logo" width="150"></a>
            </div>
        </div>
    </div>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    @if($word)
                    <div class="about-title" data-wordid="{{ $word->id }}>

                            <h2>{{ $word->title }}</h2>

                            <p><span class="bold-title">Definition: </span>{{ $word->definition }}</p>

                            <p><span class="bold-title">Bangla meaning: </span>{{ $word->bmeaning }}</p>

                            <p><span class="bold-title">Synonyms: </span>{{ $word->synonyms }}</p>

                            <p><span class="bold-title">Quotes: </span>{{ $word->quotes }}</p>
                            {{--<p><span class="bold-title">Likes: </span>{{ $like['like'] }}</p>--}}
                            <div class="interaction">
                                <a href="#" class="like" data-value="1">{{ App\Like::where('word_id',$word->id)->where('ip',Request::ip())->first() ? App\Like::where('word_id',$word->id)->where('ip',Request::ip())->first()->like == 1 ? 'You like this word' : 'Like' : 'Like' }}</a>
                                <a href="#" class="like" data-value="0">{{ App\Like::where('word_id',$word->id)->where('ip',Request::ip())->first() ? App\Like::where('word_id',$word->id)->where('ip',Request::ip())->first()->like == 0 ? 'You don\'t like this word' : 'Dislike' : 'Dislike' }}</a>
                            </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')
    <script>
        $('.like').on('click', function(event) {
            event.preventDefault();
            wordId = event.target.parentNode.parentNode.dataset['wordid'];
            var token = '{{ Session::token() }}';
            var urlLike = '{{ route('like') }}';
            var isLike = event.target.previousElementSibling == null;
            $.ajax({
                method: 'POST',
                url: urlLike,
                data: {isLike: isLike, wordId: wordId, _token: token}
            })
                .done(function() {
                    event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
                    if (isLike) {
                        event.target.nextElementSibling.innerText = 'Dislike';
                    } else {
                        event.target.previousElementSibling.innerText = 'Like';
                    }
                });
        });
    </script>
@endsection