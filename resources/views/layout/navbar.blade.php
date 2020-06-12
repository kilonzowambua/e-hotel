
  
  <div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


<div class="site-navbar-wrap js-site-navbar bg-white">
  
  <div class="container">
    <div class="site-navbar bg-light">
      <div class="py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href="index.html">E-hotels </a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                
                <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ url('/')}}">Home</a>
                  </li>
                  <li class="has-children">
                    <a href="{{url('/rooms')}}">Rooms</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="rooms.html">Standard Room</a></li>
                      <li><a href="rooms.html">Family Room</a></li>
                      <li><a href="rooms.html">Single Room</a></li>
                      <li class="has-children">
                        <a href="{{ url('/rooms')}}">Rooms</a>
                        <ul class="dropdown">
                          <li><a href="rooms.html">America</a></li>
                          <li><a href="rooms.html">Europe</a></li>
                          <li><a href="rooms.html">Asia</a></li>
                          <li><a href="rooms.html">Africa</a></li>
                          
                        </ul>
                      </li>

                    </ul>
                  </li>
                  <li><a href="{{ url('/events')}}">Events</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                  <li><a href="{{url('staff/login')}}">Staff</a></li>
                  <li><a href="{{url('/login')}}">Log in</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
