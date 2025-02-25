<nav class="navbar navbar-expand-lg bg-body-white">
  <div class="container">
    <img src="{{ asset('img/logo.png') }}" width="30" height="35" alt="">
    <a class="navbar-brand fw-bold ps-4" href="#">ALC Gampengrejo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link px-4 fw-bold active" aria-current="page" href="#" style="font-size: .90rem;">Home</a>
        <a class="nav-link px-4 fw-bold" href="#" style="font-size: .90rem;">Tentang</a>
        <a class="nav-link px-4 fw-bold" href="#" style="font-size: .90rem;">Materi Bimble</a>
        <a class="nav-link px-4 fw-bold" href="#" style="font-size: .90rem;">Biaya Bimble</a>
      </div>
    </div>
    <a href="{{ route('login') }}" type="button" class="button btn btn-sm" style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: .90rem; background-color: #3B82F6; color: #FFFFFF;">
        Login/Daftar
    </a>
  </div>
</nav>