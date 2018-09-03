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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection