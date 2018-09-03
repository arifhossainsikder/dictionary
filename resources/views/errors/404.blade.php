@extends('layouts.front-home')


@section('content')

    <div class="container wow fadeInUp delay-03s">
        <div class="row">
            <div class="logo text-center">
                <a href="{{ route('front') }}"><img src="/images/logo.png" alt="logo" width="150"></a>
                <h2>Error 404!!</h2>
            </div>

        </div>
    </div>
    <section>
        <div class="container">
            <div class="row bort text-center">
                <div class="social">
                    <ul>
                        <li>
                            <a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="about-title">
                        <h2>About Us</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </br>voluptatum deleniti atque corrupti quos dolores e</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
                        <div class="img">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <h3 class="abt-hd">Our process</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="img">
                            <i class="fa fa-eye"></i>
                        </div>
                        <h3 class="abt-hd">Our Vision</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
                        <div class="img">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3 class="abt-hd">Our Approach</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
                        <div class="img">
                            <i class="fa fa-dot-circle-o"></i>
                        </div>
                        <h3 class="abt-hd">Our Objective</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection