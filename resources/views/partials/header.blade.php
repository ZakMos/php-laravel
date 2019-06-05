<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('blog.index') }}">Laravel Guide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('other.about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/register') }}">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form class="" id="logout-form" action="{{ url('/logout') }}" method="POST">
          {{ csrf_field() }}
        </form>
      </li>



    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
