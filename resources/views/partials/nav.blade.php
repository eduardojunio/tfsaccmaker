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
        @if ($user === null)
          <li {!! (Request::is('register')) ? 'class="active"' : '' !!}><a href="/register"><i class="glyphicon glyphicon-share-alt"></i> Create account</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
            <div class="dropdown-menu" style="width: 225px;">
              <div style="padding: 15px;">
                {!! Form::open(['action' => 'Auth\AuthController@postLogin']) !!}
                  <div class="form-group">
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Accout name', 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                  </div>
                  <div class="checkbox" style="color: #fff;">
                    <label>
                      {!! Form::checkbox('remember', null, null) !!} Stay signed in
                    </label>
                  </div>
                  {!! Form::submit('Sign In', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-bottom: 5px;']) !!}
                  <a href="/password/email"><input class="btn btn-default" type="button" value="Forgot password?" style="width: 100%;"></a>
                {!! Form::close() !!}
              </div>
            </div>
          </li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ $user->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/account">Account Management</a></li>
              <li><a href="/logout">Sign Out</a></li>
            </ul>
          </li>
        @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
