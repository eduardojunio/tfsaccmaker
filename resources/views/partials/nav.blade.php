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
          <li {!! (Request::is('/')) ? 'class="active"' : '' !!}><a href="/"><i class="fa fa-home"></i> Home</a></li>
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
          <li {!! (Request::is('register')) ? 'class="active"' : '' !!}><a href="register"><i class="glyphicon glyphicon-share-alt"></i> Create account</a></li>
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
