
<div class="back-to-top"></div>
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
                
          <a class="navbar-brand" href="{{url('/')}}"><h2><span class="text-primary">Smart</span>-Health</h2></a>

      

        <form action="#">
          
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
@if(Route::has('login'))
@auth
            <li class="nav-item">
              <a class="btn btn-primary" href="{{route('appoinment_status')}}">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-warning" href="{{route('logout')}}">Logout</a>
            </li>
@else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('/login')}}">Login / Register</a>
            </li>
@endauth
@endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>