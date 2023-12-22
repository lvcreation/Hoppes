<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('accueil')}}">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Gestion Hopes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('chart')}}">
          <i class="ti-chart menu-icon"></i>
          <span class="menu-title">Chart </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('chartDonut')}}">
          <i class="ti-chart menu-icon"></i>
          <span class="menu-title">Chart donut</span>
        </a>
      </li>
      {{-- @if($membre == "Admin") --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Ajouter Eléments</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('AjEtudiant')}}">Ajouter Etudiant</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjVague')}}">Ajouter Vague</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjFormation')}}">Ajouter Formation</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjPersonnel')}}">Ajouter Une Personnel</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjDuree')}}">Ajouter Une Duree</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjEcolage')}}">Ajouter Une Ecolage</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjDroit')}}">Ajouter Une Droit</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjFormateur')}}">Ajouter Une Formateur</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjTestimonial')}}">Ajouter Un Testimonial</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjEvenement')}}">Ajouter Un Evenement</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('AjExtrait')}}">Ajouter Un extrait</a></li>
          </ul>
        </div>
      </li>
      {{-- @endif --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements2"aria-expanded="false" aria-controls="form-elements2">
          <i class="ti-search menu-icon"></i>
          <span class="menu-title">Recherche Avancé</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('rechercheAvance')}}">Recheche par vague</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('rechercheAvance2')}}">Recherche par ecolage</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('rechercheAvance4')}}">Recherche par statue</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('rechercheAvance3')}}">Ecolage avancée</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">Affichages Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('droit')}}">Droit</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('ecolage')}}">Ecolage</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('duree')}}">Duree</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('Formation')}}">Formation</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('Vague')}}">Vague</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('Personnel')}}">Personnel</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('etudiant')}}">Etudiant</a>
            <li class="nav-item"> <a class="nav-link" href="{{route('Inscriptions')}}">Inscription/total</a>
            <li class="nav-item"> <a class="nav-link" href="{{url('GestionEcolage')}}">Gestion ecolage</a>
              <li class="nav-item"> <a class="nav-link" href="{{route('finance')}}">Gestion ecolage</a>
              {{-- <ul class="nav flex-column sub-menu ">  
                <li class="nav-item"> <a class="nav-link" href="{{route('inscription')}}">Inscription/jour</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('inscrsemaine')}}">Inscription/semaine</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('inscrmois')}}">Inscription/mois</a></li>
              </ul> --}}
            </li>
                    
           
            {{-- <li class="nav-item"> <a class="nav-link" href="{{route('choix_inscription')}}">Inscription</a></li>
 --}}

          </ul>
        </div>
      </li>
    </ul>
  </nav>