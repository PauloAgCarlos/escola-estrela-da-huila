<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h3 class="logo"><img src="../assets/img/estrela (2).png">Estrela da Huila</a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        
        <li><a class="nav-link scrollto" href="#contact">Notificacoes</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
         
            <li class="dropdown"><a href="#"><span>Usuario:</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/home">Meu Perfil</a></li>
                  <!-- <li><a href="#">Sair</a></li> -->
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                  
                </ul>
              </li>
          </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
