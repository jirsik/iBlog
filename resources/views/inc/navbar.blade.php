<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
          <a class="navbar-brand" href="{{action('PagesController@welcome')}}">{{config('app.name','i_Blog')}}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">

              @if ((Request::path() == 'home')||(Request::path() == 'login'))
                <li class="nav-item active">
              @else
                <li class="nav-item">
              @endif

                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
              </li>

              @if (Request::path() == 'posts')
                <li class="nav-item active">
              @else
                <li class="nav-item">
              @endif

                <a class="nav-link" href="{{action('PostsController@index')}}">Read</a>
              </li>
              @auth
                @if (Request::path() == 'posts/create')
                  <li class="nav-item active">
                @else
                  <li class="nav-item">
                @endif

                    <a class="nav-link" href="{{action('PostsController@create')}}">New post</a>
                  </li>
              @endauth  
            </ul>
            <ul class="navbar-nav pull-right">
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Register</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
              
            </ul>
          </div>
        </div>
      </nav>