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
    @yield('content')
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

            } else{
                $('#wordList').css("display", "none");
            }
        });

        // $(document).on('click', 'li', function () {
        //
        //     $('#word').val($(this).text());
        //     $('#wordList').fadeOut();
        //
        // });

    });
</script>
</body>
</html>
