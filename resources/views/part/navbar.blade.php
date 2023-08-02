<nav class="navbar fixed-top navbar-expand-lg bg-body shadow-sm">
  <div class="container">
    <a class="navbar-brand nama-aplikasi" href="#home">Tenang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link nav active" href="/">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            THERAPY
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/therapy-meditation">MEDITATION</a></li>
            <li><a class="dropdown-item" href="/therapy-zikir">ZIKIR</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link nav active" href="/journal/create">JOURNAL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav active" href="/#guide">GUIDE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav active" href="/#about">ABOUT</a>
        </li>

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person"></i> My Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-dark rounded-pill" href="/login" role="button">LOGIN</a>
        </li>
        @endauth
        
      </ul>
    </div>
</nav>


