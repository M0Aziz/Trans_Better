
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
              @foreach ($categories as $categorie)
                  @if ($sousCategories->where('categorie_id', $categorie->id)->count() > 0)
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="categorieDropdown{{ $categorie->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ $categorie->nom }}
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="categorieDropdown{{ $categorie->id }}">
                              @foreach ($sousCategories->where('categorie_id', $categorie->id) as $sousCategorie)
                                  <li><a class="dropdown-item" href="#">{{ $sousCategorie->nom }}</a></li>
                              @endforeach
                          </ul>
                      </li>
                  @else
                      <li class="nav-item">
                          <a class="nav-link" href="#">{{ $categorie->nom }}</a>
                      </li>
                  @endif
              @endforeach

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
              <button class="btn btn-outline-primary" id="storeTicketButton" data-id="1" data-nom="bus 274" data-prix="200">Store Ticket</button>
              <a href="/panier" ><i class="ms-2 fas fa-shopping-cart"></i></a>
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
    



      @if (session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
  @endif
  
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif

<div class="row mt-5">
<div class="col-lg-6">
    <h1 class="text-center mt-5"> transport en commun contribue au mieux-être des gens!</h1>
<h4 class="mt-5" style="text-align: justify">
    Il a aussi une incidence positive sur la santé publique et sur la qualité de vie des citoyens, parce qu'il réduit les nuisances sonores et abaisse les niveaux de stress, en plus d'améliorer la qualité de l'air.</h4>
</div>
<div class="col-lg-6">

<img src="{{ Vite::asset('resources/assets/img/home.webp') }}" style=" border-radius: 10%; /* Rend la div circulaire */
overflow: hidden; /* Cache les coins de l'image */
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); " >
</div>


</div>




<div class="row mt-5">
  <div class="col-md-4 mt-4">
      <div class="card text-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
          <div class="card-body">
            <i class="fa fa-users fa-4x text-primary"></i>

              <h5 class="card-title mt-4">Recrutement</h5>
              <p class="card-text">Description ou contenu lié au recrutement.</p>
          </div>
      </div>
  </div>
  <div class="col-md-4 mt-4">
      <div class="card text-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
          <div class="card-body">
            <i class="fa fa-question-circle fa-4x text-primary"></i>

              <h5 class="card-title mt-4">Foire aux questions</h5>
              <p class="card-text">Description ou contenu lié aux FAQ.</p>
          </div>
      </div>
  </div>
  <div class="col-md-4 mt-4">
      <div class="card text-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
          <div class="card-body">
            <i class="fa fa-file-alt fa-4x text-primary"></i>

              <h5 class="card-title mt-4">Procès verbaux</h5>
              <p class="card-text">Description lié aux procès verbaux.</p>
          </div>
      </div>
  </div>
  <div class="col-md-4 mt-4">
      <div class="card text-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
          <div class="card-body">
            <i class="fa fa-map fa-4x text-primary "></i>

              <h5 class="card-title mt-4">Transport à la carte</h5>
              <p class="card-text">Description lié au transport sur mesure.</p>
          </div>
      </div>
  </div>
  <div class="col-md-4 mt-4">
      <div class="card text-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
          <div class="card-body">
            <i class="fa fa-lock fa-4x text-primary"></i>

              <h5 class="card-title mt-4">Protection des données personnelles</h5>
              <p class="card-text">Description ou contenu lié à la protection des données.</p>
          </div>
      </div>
  </div>

  <div class="col-md-4 mt-4" >
    <div class="card text-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
        <div class="card-body">
          <i class="fa fa-cogs fa-4x text-primary"></i>

            <h5 class="card-title mt-4">Service</h5>
            <p class="card-text">Description ou contenu lié au service.</p>
        </div>
    </div>
</div>
</div>






<div class="row mt-5">
  <div class="col-lg-6">
      <h1 class="text-center mt-5">   # خلّــص تســكرتــك</h1>
  <h4 class="mt-5" style="text-align: justify">
  
   <br>
    est le slogan de la campagne de sensibilisation organisée par la TransBetter en collaboration avec la Radio IFM portant sur le thème de la Resquille
  </h4>  </div>
  <div class="col-lg-6">
  
  <img src="{{ Vite::asset('resources/assets/img/media_temp_1457446227.jpg') }}" style=" border-radius: 10%; 
  overflow: hidden; /* Cache les coins de l'image */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); " class="img-fluid mt-5" >
  </div>
  
  
  </div>




  <div class="row mt-5">



    <div class="col-lg-6">
    
      <img src="{{ Vite::asset('resources/assets/img/media_temp_1460984985.jpg') }}" style=" border-radius: 10%; 
      overflow: hidden; /* Cache les coins de l'image */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); " class="img-fluid mt-5" >
      </div>

    <div class="col-lg-6">

   

        <h1 class="text-center mt-5">     #...Rani Fi khidimtek !!!!<br>
          #...رانــي في خدمتك !!!</h1>
    <h4 class="mt-5" style="text-align: justify">
    
     <br>
     est le slogan de la campagne de sensibilisation organisée par la TranBetter en collaboration avec la Radio IFM portant sur les thèmes d'agression et de vandalisme
    </h4>
    </div>

    
    
    </div>

   



    <div class="row mt-5">
      <div class="col-lg-6">
          <h1 class="text-center mt-5">    #...Rani Fi khidimtek !!!! <br>
            #...رانــي في خدمتك !!!</h1>
      <h4 class="mt-5" style="text-align: justify">
      
       <br>
       est le slogan de la campagne de sensibilisation organisée par la TransBetter en collaboration avec la Radio IFM portant sur les thèmes d'agression et de vandalisme
      
      </h4></div>
      <div class="col-lg-6">
      
      <img src="{{ Vite::asset('resources/assets/img/media_temp_1461053907.jpg') }}" style=" border-radius: 10%; 
      overflow: hidden; /* Cache les coins de l'image */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); " class="img-fluid mt-5" >
      </div>
      
      
      </div>




      <footer class="footer mt-5 ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">TransBetter Tim</a>
                        for a better web.
                    </div>
                </div>
            
            </div>
        </div>
    </footer>

</div>


<script>
  document.getElementById('storeTicketButton').addEventListener('click', function() {
      // Get the data attributes from the button
      const id = this.getAttribute('data-id');
      const nom = this.getAttribute('data-nom');
      const prix = this.getAttribute('data-prix');

      // Create an object with the ticket data
      const ticket = { id, nom, prix };

      // Convert the ticket object to a JSON string
      const ticketJson = JSON.stringify(ticket);

      // Store the JSON string in localStorage
      localStorage.setItem('ticket', ticketJson);

      // Provide a confirmation to the user
      alert('Ticket est ajouter au panier!');
  });
</script>


@endsection
