<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TFSAccMaker - News</title>

    <!--  regular browsers -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- For iPad with high-resolution Retina display running iOS = 7: -->
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">

    <!-- Open Sans font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- app style sheet -->
    <link rel="stylesheet" href="css/app.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="header">
      <a href="/"><img src="images/tfsaccmaker-logo-black.png" alt="TFSAccMaker"></a>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/"><i class="fa fa-home"></i> Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Community <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Live Casts</a></li>
                  <li><a href="#">Characters</a></li>
                  <li><a href="#">Highscores</a></li>
                  <li><a href="#">Houses</a></li>
                  <li><a href="#">Guilds</a></li>
                  <li><a href="#">Guild Wars</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book"></i> Library <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Exp. stages</a></li>
                  <li><a href="#">Quests</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Shop</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Forum</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-question-sign"></i> Help <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">F.A.Q.</a></li>
                  <li><a href="#">Rules</a></li>
                  <li><a href="#">Support</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="register"><i class="glyphicon glyphicon-share-alt"></i> Create account</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                  <form method="post" action="login" accept-charset="UTF-8" style="padding: 15px;">
                    <input style="margin-bottom: 5px;padding: 4px 5px;" type="text" placeholder="Username" id="username" name="username">
                    <input style="margin-bottom: 10px;padding: 4px 5px;" type="password" placeholder="Password" id="password" name="password">
                    <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In" style="margin-bottom: 5px;">
                    <a href="#"><input class="btn btn-default" type="button" value="Forgot password?" style="width: 100%;"></a>
                  </form>
                </div>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </header>

    <div class="container">

      <div class="row">
        <section class="col-lg-9">
          @yield('content')
        </section>
        <aside class="col-lg-3">
          <section>
            <h3>Top 5 Level</h3>
            <table class="table table-condensed table-content table-striped">
              <tbody>
                <tr>
                  <td style="width: 80%"><strong>1.</strong> <a href="#">Player Name</a></td>
                  <td><span class="label label-info">Lvl. 8</span></td>
                </tr>
                <tr>
                  <td style="width: 80%"><strong>2.</strong> <a href="#">Player Name</a></td>
                  <td><span class="label label-info">Lvl. 8</span></td>
                </tr>
                <tr>
                  <td style="width: 80%"><strong>3.</strong> <a href="#">Player Name</a></td>
                  <td><span class="label label-info">Lvl. 8</span></td>
                </tr>
                <tr>
                  <td style="width: 80%"><strong>4.</strong> <a href="#">Player Name</a></td>
                  <td><span class="label label-info">Lvl. 8</span></td>
                </tr>
                <tr>
                  <td style="width: 80%"><strong>5.</strong> <a href="#">Player Name</a></td>
                  <td><span class="label label-info">Lvl. 8</span></td>
                </tr>
              </tbody>
            </table>
          </section>
          <section>
            <h3>Information</h3>
            <table class="table table-condensed table-content table-striped">
              <tbody>
                <tr>
                  <td colspan="2"><strong>IP:</strong> tfsaccmaker.dev</td>
                </tr>
                <tr>
                  <td><strong>Client:</strong></td>
                  <td>10.77</td>
                </tr>
                <tr>
                  <td><strong>Type:</strong></td>
                  <td>RPG/PVP</td>
                </tr>
                <tr>
                  <td colspan="2"><a href="http://static.otland.net/ipchanger.exe" class="btn btn-small btn-success btn-block"><i class="glyphicon glyphicon-download-alt"></i> Download IP Changer</a></td>
                </tr>
              </tbody>
            </table>
          </section>
          <section>
            <h3>Rates</h3>
            <table class="table table-condensed table-content table-striped">
            <tbody>
            <tr>
            <td><strong>Experience:</strong></td>
            <td><a href="expstages.php">average 5x</a></td>
            </tr>
            <tr>
            <td><strong>Magic:</strong></td>
            <td>3x</td>
            </tr>
            <tr>
            <td><strong>Skill:</strong></td>
            <td>3x</td>
            </tr>
            <tr>
            <td><strong>Loot:</strong></td>
            <td>2x</td>
            </tr>
            </tbody>
            </table>
          </section>
          <section>
            <h3>Server Status</h3>
            <table class="table table-condensed table-content table-striped">
            <tbody>
            <tr><td><a href="online.php">1 players online.</a></td></tr><tr><td><a href="casts.php">0 casts with 0 spectators.</a></td></tr><tr><td><strong>The next server save is in:</strong></td></tr><tr><td id="timeToServerSave">12 hours, 00 min and 00 sec.</td></tr></tbody>
            </table>
          </section>
        </aside>
      </div>

    </div>

    <footer class="footer">
      <p>Powered by <a href="http://www.ejweb.com.br/" target="_blank">EJWEB</a>.</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
