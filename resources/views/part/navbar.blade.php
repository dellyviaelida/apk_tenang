<nav class="navbar fixed-top navbar-expand-lg bg-body shadow-sm">
  <div class="container-fluid mx-5">
    <a class="navbar-brand nama-aplikasi" href="#home">Tenang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav active" href="/">HOME</a>
        </li>
        <li class="nav-item dropdown px-3">
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
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0">
        @can('client')
        <li class="nav-item dropdown px-3">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <li class="nav-item mx-3">
            <a class="btn btn-dark rounded-pill px-4" href="/login" role="button">LOGIN</a>
        </li>
        @endcan
      </ul>
    </div>
    </div>
</nav>


