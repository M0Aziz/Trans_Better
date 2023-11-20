@extends('back.layout')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">Type here...</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end ">
                <li class="nav-item d-flex align-items-center me-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                   <i class="fa fa-user me-sm-1"></i>
                                                   {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>


                   
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a href="/profile" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">profile</span>
                    </a>
                </li>
           
            </ul>
        </div>
    </div>
</nav>
<style>
    .table td, .table th {
    white-space: normal;
}
td{

    border-right:1px solid #B4B4B4;
    color: #888888;
    border-left:1px solid #B4B4B4;
    padding: 15px;

}
tr:nth-child(even) {
    background-color: #B4B4B4;
}

tr{
    margin-bottom: 100px; 


}
th {
    background-color: #F0F0F0;
    color: black;
    border-right:1px solid #B4B4B4;
    border-left:1px solid #B4B4B4;
    padding: 15px;
    border-top:1px solid #B4B4B4;

    

}


.circle2 {
    width: 10px;
    height: 10px;
    border-radius: 50%;
   display: flex;
}






    </style>

<div class="container">
   

   
    
    
    <div class="row">
    <div class="col-lg-3">
        <div class="card" style="background: linear-gradient(-20deg, #bbd5ef 60%, white 65%); height: 160px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); border: hidden;">
            <div class="card-body" >
                <h5 class="card-title mb-3">User</h5>
                <h1 class="card-text text-end mt-5 me-5">65</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="background: linear-gradient(-20deg, #f4d1c3 60%, white 65%); height: 160px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);border: hidden">
            <div class="card-body" >
                <h5 class="card-title mb-3">Commande</h5>
                <h1 class="card-text text-end mt-5 me-5">10</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="background: linear-gradient(-20deg, #bbd5ef 60%, white 65%); height: 160px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);border: hidden">
            <div class="card-body" >
                <h5 class="card-title mb-3">Contact</h5>
                <h1 class="card-text text-end mt-5 me-5">5</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="background: linear-gradient(-20deg, #f4d1c3 60%, white 65%); height: 160px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);border: hidden">
            <div class="card-body" >
                <h5 class="card-title mb-3">Produit</h5>
                <h1 class="card-text text-end mt-5 me-5">15</h1>
            </div>
        </div>
    </div>
    </div>
    
    
    <div class="row">
    
    
    <div class="col-lg">
    <div class="mt-5" style="  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25); " >
    
        <h6 class="p-4">Messages récents</h6>
        <div class="table-responsive mt-3" >
    
    
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th>#</th>
                        <th>Objet</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                  
    
    
                    <tr>
                        <td>
                          1
                        </td>
                        <td>
                           Problème de transport
                        </td>
                        <td>
                            Le problème de transport est un défi complexe en logistique et en gestion de la chaîne d'approvisionnement, consistant à déterminer comment acheminer des marchandises depuis des sources vers des destinations                    </td>
                        <td>
                            14-10-2023, 10:30 PM             
                               </td>
                    </tr>
    
    
                  
    
                    <tr>
                        <td>
                          2
                        </td>
                        <td>
                           Problème de transport
                        </td>
                        <td>
                            Le problème de transport est un défi complexe en logistique et en gestion de la chaîne d'approvisionnement, consistant à déterminer comment acheminer des marchandises depuis des sources vers des destinations                    </td>
                        <td>
                            14-10-2023, 10:30 PM             
                               </td>
                    </tr>
    
    
    
    
                    <tr>
                        <td>
                          3
                        </td>
                        <td>
                           Problème de transport
                        </td>
                        <td>
                            Le problème de transport est un défi complexe en logistique et en gestion de la chaîne d'approvisionnement, consistant à déterminer comment acheminer des marchandises depuis des sources vers des destinations                    </td>
                        <td>
                            14-10-2023, 10:30 PM             
                               </td>
                    </tr>
    
    
    
    
                    <tr>
                        <td>
                          4
                        </td>
                        <td>
                           Problème de transport
                        </td>
                        <td>
                            Le problème de transport est un défi complexe en logistique et en gestion de la chaîne d'approvisionnement, consistant à déterminer comment acheminer des marchandises depuis des sources vers des destinations                    </td>
                        <td>
                            14-10-2023, 10:30 PM             
                               </td>
                    </tr>
    
    
                </tbody>
            </table>
            
    
    
    
            </div>
    </div>
    
    
    </div>
    
    
    </div>
    
    
    
    <div class="table-responsive mt-5" >
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th>Commande</th>
                    <th>Nom </th>
                    <th>Produit</th>
                    <th>Total</th>
    
                    <th>Date</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td style="color: black;">#1</td>
                    
                    <td>Moahmed Ali</td>
                    <td class="d-flex justify-content-center">
                       Ticket Classe A
                    </td>
                    <td>10.500</td>
    
                    <td>14-10-2023</td>
                    <td>
                        <i class="fa fa-edit me-5" style="color: green;"></i>
    
                        <i class="fa fa-trash" style="color: red;"></i>
                    </td>
                </tr>
    
                <tr>
                    <td style="color: black;">#2</td>
                    
                    <td>Amine Ayari</td>
                    <td class="d-flex justify-content-center">
                       Ticket Classe B
                    </td>
                    <td>10.500</td>
    
                    <td>14-10-2023</td>
                    <td>
                        <i class="fa fa-edit me-5" style="color: green;"></i>
    
                        <i class="fa fa-trash" style="color: red;"></i>
                    </td>
                </tr>
    
    
    
                <tr>
                    <td style="color: black;">#3</td>
                    
                    <td>Moahmed Ali</td>
                    <td class="d-flex justify-content-center">
                       Ticket Classe A
                    </td>
                    <td>9.500</td>
    
                    <td>14-10-2023</td>
                    <td>
                        <i class="fa fa-edit me-5" style="color: green;"></i>
    
                        <i class="fa fa-trash" style="color: red;"></i>
                    </td>
                </tr>
    
    
    
                <tr>
                    <td style="color: black;">#4</td>
                    
                    <td>Moahmed Ali</td>
                    <td class="d-flex justify-content-center">
                       Ticket Classe A
                    </td>
                    <td>15.500</td>
    
                    <td>14-10-2023</td>
                    <td>
                        <i class="fa fa-edit me-5" style="color: green;"></i>
    
                        <i class="fa fa-trash" style="color: red;"></i>
                    </td>
                </tr>
    
    
    
                <tr>
                    <td style="color: black;">#1</td>
                    
                    <td>Moahmed Ali</td>
                    <td class="d-flex justify-content-center">
                       Ticket Classe A
                    </td>
                    <td>20.500</td>
    
                    <td>14-10-2023</td>
                    <td>
                        <i class="fa fa-edit me-5" style="color: green;"></i>
    
                        <i class="fa fa-trash" style="color: red;"></i>
                    </td>
                </tr>
              
    
            </tbody>
        </table>
        
        </div>
    
    
    
    
        </div>

    <footer class="footer py-4  ">
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
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">TransBetter Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


@endsection
