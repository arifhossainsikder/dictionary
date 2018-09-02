<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dictionary') }}</title>

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>


<div class="content">
    <div class="container wow fadeInUp delay-03s">
        <div class="row">
            <div class="logo text-center">
                <img src="images/logo.png" alt="logo" width="150">
                <h2>We Are Baking Something New!!</h2>
            </div>

            <div class="subcription-info text-center">
                <form class="subscribe_form" action="#" method="post">
                    <input required="" value="" placeholder="Enter your word..." class="email" id="word" name="word" type="text">
                    <div id="wordList">

                    </div>
                    <input class="subscribe" name="email" value="Search!" type="submit">
                    {{ csrf_field() }}
                </form>
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
</div>
<footer class="footer">
    <div class="container">
        <div class="row bort">

            <div class="copyright">
                © Copyright Bangla Play. All rights reserved.
                <div class="credits">
                    Developed by <a href="http://www.csevillage.com/">CSE Village</a>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#word').keyup(function () {
            var query = $(this).val();
            if (query != ''){

                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('fetch.search') }}",
                    method: "POST",
                    data: {query: query, _token: _token},
                    success: function (data) {
                        $('#wordList').fadeIn();
                        $('#wordList').html(data);
                    }
                });

            }
        });

        $(document).on('click', 'li', function () {

            $('#word').val($(this).text());
            $('#wordList').fadeOut();

        });
        
    });
</script>
</body>
</html>
