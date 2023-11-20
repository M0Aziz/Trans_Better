@extends('welcome')
@section('content')
  <div class="container">





    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
    
            <img style=" background-size: cover;"src="{{ Vite::asset('resources/assets/img/logo-ct.png') }}" class="img-fluid" width="100px" alt="main_logo">
    
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
            <ul class="navbar-nav ms-auto mx-auto">
              
                      <li class="nav-item">
                          <a class="nav-link" href="/">Acceuil</a>
                      </li>
                
             

              @if (Auth::check()) 
              <li class="nav-item">
                  <a class="nav-link" href="/contact">Contactez-nous</a>
              </li>
          @endif
          </ul>
          
            <form class="d-flex mt-3 me-3">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            @Auth
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button class="dropdown-item" type="submit">Log Out</button>
                  </form>
              </div>
          </div>
          
          @else
          <div>
           <a href="/login" ><button class="btn btn-primary" type="submit">Connexion</button></a>
        </div>
        @endauth

          </div>
        </div>
      </nav>


<div class="row">
<div class="col-lg-6">
    <h1 class="mt-5">Contactez-nous</h1>
    <form class="mt-5" action="{{ route('contact.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="obj_message" class="mt-5">Objet :</label>
        <input type="text" class="form-control" id="obj_message" name="obj_message" placeholder="Objet du message">
    </div>
    
        <div class="form-group mt-5">
            <label for="message">Message :</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Votre message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Envoyer</button>
    </form>

</div>
<div class="col-lg-6">

<div class="mt-4">
    <img style=" background-size: cover;"src="{{ Vite::asset('resources/assets/img/img-contactanos.webp') }}" class="img-fluid"  alt="main_logo">
</div>
</div>


</div>

  </div>
  @endsection