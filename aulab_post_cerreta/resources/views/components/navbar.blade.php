@auth
<li class="nav-item">
  <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
</li>
@if (Auth::user()->is_admin)
  <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
@endif
@if (Auth::user()->is_revisor)
  <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
@endif
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Ciao {{ Auth::user()->name }}
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Profilo</a></li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
    <form action="{{route('logout')}}" method="POST" id="form-logout">
      @csrf
    </form>
  </ul>
</li>
@endauth
@guest
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Benvenuto Ospite
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
      <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
    </ul>
  </li>
@endguest
<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
</li>
<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
</li>
<form action="{{route('article.search')}}" method="GET" class="d-flex" role="search">
  <input class="form-control me-2" type="serach" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
  <button class="btn btn-outline-secondary" type="submit">Cerca</button>
</form>

      