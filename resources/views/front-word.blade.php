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
                    <div class="about-title">
                        @if($word)
                        <h2>{{ $word->title }}</h2>

                        <p><span class="bold-title">Definition: </span>{{ $word->definition }}</p>

                            <p><span class="bold-title">Bangla meaning: </span>{{ $word->bmeaning }}</p>

                        <p><span class="bold-title">Synonyms: </span>{{ $word->synonyms }}</p>

                        <p><span class="bold-title">Quotes: </span>{{ $word->quotes }}</p>
                        {{--<p><span class="bold-title">Likes: </span>{{ $like['like'] }}</p>--}}
                            {{--<div class="interaction">--}}
                                {{--<a href="#" class="like">@if($like['like'] == 1)You like this post @elseif($like == null) Like @else Like @endif</a>--}}
                                {{--<a href="#" class="like">@if($like && $like['like'] == 0)You dont like this post @elseif($like == null) Dislike @else Dislike @endif</a>--}}
                            {{--</div>--}}
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection