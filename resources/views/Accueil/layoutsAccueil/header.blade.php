<!-- HEADER  -->
<header class="header header_index">

  <div class="menu">
    <!-- text  -->
    <div class="menu_textContent">
      <p class="menu_text menu_logo">
        <img src="public/images/logo.png" class="menu_img" alt="hopes">
        <span>Hopes</span>
      </p>
    </div>

    <!-- icon  -->
    <div class="menu_icon">
      <div class="menu_icon-line menu_icon-top"></div>
      <div class="menu_icon-line menu_icon-bottom"></div>
      <div class="close"><span class="close_i"><i class="fa-solid fa-xmark"></i></span></div>
    </div>
  </div>

  <div class="nav_content">
    <div class="start">
      <div class="start-left">
        <span class="start_i"><i class="fa-solid fa-phone"></i></span>
        <span class="start_text">+26134052655</span>
        <div class="start_bar"></div>
        <span class="start_text">+261331456877</span>
      </div>

      <!-- SOCIALS INCONS  -->
      <div class="content_social">
        <div class="nav-content">
          <div class="toggle-btn">
            <i class='fa-solid fa-plus'></i>
          </div>
          <span style="--i:2;">
            <a href="#" style="transform: rotate(267deg);"><i class='fa-brands fa-facebook'></i></a>
          </span>
          <span style="--i:3;">
            <a href="#" class="lind"><i class='fa-brands fa-linkedin-in'></i></a>
          </span>
          <span style="--i:4;">
            <a href="#" class="github"><i class='fa-brands fa-github'></i></a>
          </span>

        </div>
      </div>
    </div>

    <nav class="nav">
      <h1 class="nav_logo"><a href="{{route('AccueilAdmin')}}" class="nav_logo-text">Logo</a></h1>
      <ul class="nav_links">
        <li class="nav_item"><a href="{{route('accueil')}}" class="nav_link">Accueil</a></li>
        <li class="nav_item"><a href="#Apropos" class="nav_link">A propos</a></li>
        <li class="nav_item"><a href="#Formation" class="nav_link">Formations</a></li>
        <li class="nav_item"><a href="#Formateur" class="nav_link">Formateur</a></li>
        <li class="nav_item"><a href="#Evenement" class="nav_link">Evenement</a></li>
        <li class="nav_item"><a href="#Testimonial" class="nav_link">Testimonial</a></li>
        <li class="nav_item"><a href="#Contact" class="nav_link">Contact</a></li>
        <li class="nav_item"><a href="{{route('connexionPanier')}}" class="nav_link">Paiement</a></li>
        {{-- <li class="nav_item"><a href="{{route('chat')}}" class="nav_link">Chat</a></li> --}}


      </ul>
      <div class="nav_log">
        @if (Session::has('client'))
        <div class="navDeconnexion">
          <button class="btn-prim nav_log-conex"><a href="{{route('deconexion')}}" >Deconnexion</a></button> 
          <img src="{{asset('storage/membre/my_images/'.Session::get('client')->image)}}" height="40px" width="40px" style="border-radius:50%;" alt="">
        </div>
        @else
          <button class="btn-prim nav_log-conex"><a href="{{route('connexionMembres')}}" >Connexion</a></button>
          <button class="btn-prim nav_log-inscript"><a href="{{route('inscriptionMembres')}}" >Inscription</a></button>
        @endif
      </div>
    </nav>

    <!-- Menu  -->
    <!-- <button class="nav_lenu">Menu</button> -->
  </div>

  <div class="header_content">
    <div class="header_content-descri">
      <div class="header_content-content">
        <h1 class="header_content-titre">Hopes Formation</h1>
        <h3 class="header_content-text">Le raccourci pour un <br> &nbsp;&nbsp; &nbsp;Avenir professionnel</h3>
      </div>
      <p class="header_content-para">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil dolore omnis dolor perspiciatis
        ratione
      </p>
      <button class="btn-prim btn_header">Plus d'info<span class="btn_header-arrow"><i
            class="fa-solid fa-right-long"></i></span></button>
    </div>


    <div class="header_content-fig">
      <!-- <figure><img src="public/images/student.png" alt=""></figure> -->
      <div class="content-box">
        <div class="globContent">
          <div class="globContent_child">
          </div>
        </div>
      </div>
    </div>

  </div>

</header>