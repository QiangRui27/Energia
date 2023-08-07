<style>
  .navbar.navbar-expand-lg.bg-body-tertiary.w-100.position-fixed {
    margin-top: -3px !important;
  }
  
  .breadcrumb-item + .breadcrumb-item::before{
    margin-top: 8px !important;
  }
  #btn-search {
    padding: 10px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px !important;
  }
</style>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
        <link rel="stylesheet" href="style.css">
        <!-- FontAwesome CDN Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/navbar.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
        <link rel="icon" type="image/jpg" href="{{$restaurant->favicon}}"/>
    </head>
    <style>
        .bg-body-tertiary{
            background-color: #212121 !important;
        }
        .nav-item > .nav-link{
            color: #ffffff !important
        }
        .icon{
            color: #ffffff !important;
        }
        .fa-solid.fa-bars.bx-menu.icon {
            font-size: 25px !important;
        }
        .navbar.navbar-expand-lg.bg-body-tertiary.w-100.position-fixed {
            z-index: 1000 !important;
        }
        .btn-light{
          background-color: #eeeeee !important;
          padding: 8px !important;
          margin-top: -4px !important;
        }
    </style>

<body>
  <div class="sidebar close">
    <div class="logo-details" >
    <a href="/"><img src="{{$restaurant->logo}}" width="70px" style="margin:5px"></a>
    </div>
    <ul class="nav-links">
      @if(Auth::user()->type == 0)
      <li>
        <a href="#">
        <i class="fa-solid fa-grip-vertical"></i>
          <span class="link_name">Inicio</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Inicio</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="{{route('dish.index')}}">
            <i class="fa-solid fa-bowl-rice"></i>
            <span class="link_name">Platos</span>
          </a>
          <i class="fa-solid fa-angle-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Platos</a></li>
          <li><a href="{{route('dish.index')}}">Platos</a></li>
          <li><a href="{{route('dish-categories.index')}}">Categorías</a></li>
          <!--<li><a href="#"></a></li>-->
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="{{route('allergen.index')}}">
          <i class="fa-solid fa-wheat-awn-circle-exclamation"></i>
            <span class="link_name">Alérgenos</span>
          </a>
        </div>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Alérgenos</a></li>
        </ul>
      </li>
      <!--<li>
        <a href="#">
            <a type="button" class="position-relative float-end" href="{{route('pedidos')}}">
                <i class="fa-solid fa-bell-concierge"></i>
                <span class="position-absolute top-10 start-0 translate-middle badge rounded-pill bg-danger" style="margin-left: 55px">
                      
                    @if(!isset($pedidos))
                        {{0}}
                    @else
                        {{$pedidos[0]->pedidos}}
                    @endif
                </span>
                <span class="link_name">Pedidos</span>
            </a>-
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Pedidos</a></li>
        </ul>
      </li>-->
      <li>
        <a href="{{route('pedidos')}}">
          <i class="fa-solid fa-bell-concierge"></i>
          <span class="link_name">Pedidos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Pedidos</a></li>
        </ul>
      </li>

      <li>
        <a href="{{route('users.index')}}">
            <i class="fa-solid fa-circle-user"></i>
          <span class="link_name">Usuarios</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Usuarios</a></li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->type == 1 || Auth::user()->type == 0)
      <li>
        <div class="iocn-link">
          <a href="{{route('tables.index')}}">
            <i class="fa-solid fa-table"></i>
            <span class="link_name">Mesas</span>
          </a>
          <i class="fa-solid fa-angle-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Mesas</a></li>
          <li><a href="{{route('tables.index')}}">Mesas</a></li>
          <li><a href="{{route('selecttable')}}">Gestionar Mesa</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="{{route('reservations.index')}}">
          <i class="fa-solid fa-address-book"></i>
            <span class="link_name">Reservas</span>
          </a>
          <i class="fa-solid fa-angle-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Reservas</a></li>
          @if(Auth::user()->type == 0)
            <li><a href="{{route('reservations.index')}}">Reservas</a></li>
          @endif
          <li><a href="{{route('calendar')}}">Calendario</a></li>
          <!--<li><a href="#"></a></li>-->
        </ul>
      </li>
      @endif
      <!--<li>
        <a href="#">
            <i class="fa-solid fa-utensils"></i>
          <span class="link_name">Restaurantes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Restaurantes</a></li>
        </ul>
      </li>-->
      @if(Auth::user()->type == 0)
        <li>
          <a href="{{route('configRestaurant')}}">
              <i class="fa-solid fa-gears"></i>
            <span class="link_name">Configuración</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('configRestaurant')}}">Configuración</a></li>
          </ul>
        </li>
      @endif
      <li>
    
    <div class="profile-details">
      <div class="profile-content">
        <img src="{{auth()->user()->image}}" alt="img">
      </div>
      <div class="name-job">
        <div class="profile_name">{{auth()->user()->name}}</div>
        <div class="job">
            @if(auth()->user()->type == 0)
                Administrador
            @else
                Camarero
            @endif
        </div>
      </div>
      <a href="/logout">
        <i class="fa-solid fa-right-from-bracket"></i>
      </a>
    </div>
  </li>
</ul>
  </div>

  <section class="home-section">
        <div class="home-content">
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 position-fixed" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand mt-2" href="#"><i class="fa-solid fa-bars bx-menu icon"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="loadTables('{{route('getAllTables')}}', '{{route('selecttable')}}')">
                            Gestión de Mesas
                          </a>
                          <ul class="dropdown-menu" id="loaddAllTables">
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('selecttable')}}">Gestionar todas las Mesas</a></li>
                          </ul>
                        </li>


                        <li class="nav-item">
                          <a class="nav-link" href="{{route('calendar')}}">Calendario</a>
                        </li>
                        <!--<li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li>-->
                    </ul>
                    </div>
                </div>
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            @yield('content')
        </div>
    </section>
  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });

    

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()

  </script>
</body>
</html>