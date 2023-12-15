<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand mr-auto" href="{{route('homepage')}}">Sneakers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item mx-5">
        <a id="linknav" href="{{route('nuovi')}}" target="_blank" rel="bambini">Nuovo</a>
      </li>
      <li class="nav-item mx-5">
        <a id="linknav" href="{{route('annunci')}}" target="_blank" rel="bambini">Usato</a>
      </li>
      <li class="nav-item mx-5">
        <a id="linknav" href="{{route('annunci.create')}}" target="_blank" rel="inserisci">Vendi</a>
      </li>
      <li class="nav-item mx-5">
        <a id="linknav" href="{{route('contactUs')}}" target="_blank" rel="contattaci">Contattaci</a>
      </li>
      </ul>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item account">
        <a href="./account.html" target="_blank" rel="account"><i class="fa-regular fa-user fa-lg pr-2 account"></i></a>
      </li>
      <li class="nav-item account">
        <a href="#" target="_blank" rel="shop"><i class="fa-regular fa-cart-shopping fa-lg mx-4 shopping"></i></a>
      </li>
    </ul>
  </div>
</nav>