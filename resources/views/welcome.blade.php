<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>teem</title>

      <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- Styles -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">

      <!-- Scripts -->
      <script>
          window.Laravel = {!! json_encode([
              'csrfToken' => csrf_token(),
          ]) !!};
      </script>
    </head>
    <body class="welcome">
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>-->

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/') }}">
                      teem
                  </a>
              </div>
              
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ route('login') }}">Sign in</a></li>
                      <li><a href="{{ route('register') }}">Sign up</a></li>
                  @else
                      <li><a href="{{ url('/home') }}">Dashboard</a></li>
                  @endif
              </ul>
          </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="welcome-title">
              Your people, in sync.
            </div>
            <div class="welcome-status-box">
              <div class="status-box-titles">
                <div class="status-box-titles_time">

                </div>
                <div class="status-box-titles-title">
                  Name
                </div>
                <div class="status-box-titles-title">
                  Status
                </div>
                <div class="status-box-titles-title">
                  Until
                </div>
                <div class="status-box-titles-title status-box-titles-title-action">

                </div>
              </div>
              <div class="status-box">
                <div class="status-box_time">
                  <div class="status-box-section-content">
                    15m
                  </div>
                </div>
                <div class="status-box-section status-box_name">
                  <div class="status-box-section-content">
                    <div class="status-box_name-first">Ella</div>
                    <div class="status-box_name-last">Young</div>
                  </div>
                </div>
                <div class="status-box-section status-box_status status-box_status-in">
                  <div class="status-box-section-content">
                    In
                  </div>
                </div>
                <div class="status-box-section status-box_until">
                  <div class="status-box-section-content">
                    All Day
                  </div>
                </div>
                <div class="status-box-section status-box_action">
                  <div class="status-box-section-content">
                    Ask
                  </div>
                </div>
              </div>
            </div>
            <div class="welcome-button">
              <a href="/register" class="btn btn-primary btn-lg" role="button">Get Started</a>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="row footer-inner">
            <span><a href="mailto:">Contact</a></span><span>&copy; 2017</span>
          </div>
        </div>
      </footer>
    </body>
</html>
