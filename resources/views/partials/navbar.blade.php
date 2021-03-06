<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Nova Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="/posts">Blog</a>
        <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">Categories</a>
      </div>

      @auth
        <div class="navbar-nav dropdown ms-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navDropdown1" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Welcome back, <span class="text-capitalize">{{ auth()->user()->name }}</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navDropdown1">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My
                Dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="POST" autocomplete="off">
                @csrf
                <button type="submit" class="dropdown-item">
                  Logout <i class="bi bi-box-arrow-right"></i>
                </button>
              </form>
            </li>
          </ul>
        </div>
      @else
        <div class="navbar-nav ms-auto">
          @if (Request::is('login'))
            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">
              <i class="bi bi-box-arrow-in-left"></i>
              Login
            </a>
          @else
            <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register">
              <i class="bi bi-pencil-square"></i>
              Register
            </a>
          @endif
        </div>
      @endauth
    </div>
  </div>
</nav>
