<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') - TFSAccMaker</title>

    <!--  regular browsers -->
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <!-- For iPad with high-resolution Retina display running iOS = 7: -->
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('apple-touch-icon-152x152.png') }}">

    <!-- Open Sans font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">

    <!-- app style sheet -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="header">
      <a href="/"><img src="{{ url('images/tfsaccmaker-logo-black.png') }}" alt="TFSAccMaker"></a>

      @include('partials.nav')

    </header>

    <div class="container">

      <div class="row">
        <section class="col-lg-9">
          @yield('content')
        </section>
        @include('partials.sidebar')
      </div>

    </div>

    <footer class="footer">
      <p>Powered by <a href="http://www.ejweb.com.br/" target="_blank">EJWEB</a>.</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
  </body>
</html>
