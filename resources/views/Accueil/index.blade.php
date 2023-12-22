@extends('Accueil.layoutsAccueil.master')
@section('titre-acceueil')
        Page D'accueil
@endsection
@section('contenu')
  <!-- ABOUT FORMATIONS FORMATEUR -->
  <section class="section about" >
    <div class="about--content">
      <div class="about--animeBlock">
        <div class="about--animeContent">
          <a href="#about" class="about--block ">
            <h1 class="about--head">
              About
            </h1>
          </a>
          <a href="#formations--link" class="about--block formations" id="formations-box">
            <h1 class="formations--head">Nos Formations</h1>
          </a>
          <a href="#testimonials--link" class="about--block formateur" id="testimonials-box">
            <h1 class="formateur-head">Formateur</h1>
            <div class="formateur-content">
              @foreach ($formateur as $for)
                <figure><img src="{{asset('storage/formateur/my_images/'.$for->image)}}" alt=""></figure>
              @endforeach
            </div>
          </a>
        </div>
      </div>
      <div class="about--descri" id="Apropos">
        <h1 id="about">Qui sommes nous?😊</h1>
        <h3>ENSEMBLE, NOUS POUVONS FAIRE LA DIFFÉRENCE <br>TOUT LE MONDE À LE DROIT D'APPRENDRE.</h3>
        <p class="section_para">Hopes Formations vous offre les meilleures des formations. Les leçons sont
          expliquées point par
          point, détail par détail,
          étape par étape pour que vous puissiez bien assimiler. Les cours sont sous format vidéo
          outils nécessaires pour les travaux pratiques (logiciels, images, fichiers etc.) sont fournis.
          Un certificat est délivré
          après chaque formation.</p><br>
        <p class="section_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eligendi
          illo explicabo, esse
          odio doloremque dolorum vitae neque vero fugit dolor distinctio maiores perferendis! Iste
          voluptate ipsa alias cupiditate consequuntur id consectetur quam soluta. Amet recusandae sit
          expedita aperiam ea facilis atque harum ex earum quo eligendi ab pariatur necessitatibus animi
          optio dolor beatae quaerat ut consectetur, ratione minus? Voluptatibus ullam cumque aut
          consequatur unde corporis. Porro nulla laudantium maiores alias laborum molestiae dignissimos
          voluptate vero adipisci commodi. Iure odit, commodi libero quasi, corporis reiciendis numquam
          molestias soluta excepturi possimus est nesciunt dicta nihil aperiam consequuntur fugiat dolore
          vitae expedita.</p>
        <button class="btn-prim">Contactez nous</button>
        <br>
        <p class="section_para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque ad quo
          aliquid beatae laborum
          fugit perferendis odit repellat maiores illo.</p><br><br>
        ⁡
        <h1 id="formations--link" >Nos Formations</h1>
        <p class="section_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatibus
          maiores id fugit odio
          hic nam officiis dolores, consectetur qui, aliquam nesciunt? Iusto dolor beatae rem fugiat
          necessitatibus aliquam qui placeat maxime vel laudantium voluptates consequuntur distinctio
          quaerat maiores est fuga illum doloribus, deserunt excepturi sed aperiam! Iste, adipisci eum?
        </p><br>
        <div class="formations-extraits" id="Formation">
          <div class="displayed">
            <img src="{{asset('clientSHop/images/graphic.jpg')}}" alt="call">
            <div class="formations-extraits_head">
              <h3 class="formations-extraits_head-title">Graphic design</h3>
              <div class="formations-extraits_head-prog">
                <h3>Francophone | Anglophone</h3>
                <ul>
                  <li>Metier Teleoperateur</li>
                  <li>Info bureautique</li>
                  <li>Renforcement de langue</li>
                </ul>
              </div>
            </div>
            <div id="programme-formations" class="programme-developement">
            </div>
          </div>
          <div class="displayed">
            <img src="{{asset('clientSHop/images/call.jpg')}}" alt="">
            <div class="formations-extraits_head">
              <h3 class="formations-extraits_head-title">Call center</h3>
              <div class="formations-extraits_head-prog">
                <h3>Francophone | Anglophone</h3>
                <ul>
                  <li>Metier Teleoperateur</li>
                  <li>Info bureautique</li>
                  <li>Renforcement de langue</li>
                </ul>
              </div>
            </div>
            <div id="programme-formations" class="programme-developement">
            </div>
          </div>
          <div class="displayed">
            <img src="{{asset('clientSHop/images/dev.jpg')}}" alt="">
            <div class="formations-extraits_head">
              <h3 class="formations-extraits_head-title">Developpement</h3>
              <div class="formations-extraits_head-prog">
                <h3>Francophone | Anglophone</h3>
                <ul>
                  <li>Metier Teleoperateur</li>
                  <li>Info bureautique</li>
                  <li>Renforcement de langue</li>
                </ul>
              </div>
            </div>
            <div id="programme-formations" class="programme-developement">
            </div>
          </div>
        </div>
        <br>
        ⁡⁣⁢⁡⁢⁣⁢ <!-- Formation Your data-->⁡⁡
        <p class="section_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum accusantium
          ipsa debitis ut aliquid
          natus quos quisquam optio beatae nemo id consectetur fugiat libero totam corporis, magni eos sit
          aut?</p>
        <div class="loading--formation" id="formations--details">
          <span class="closeCatForm" id="closeCatForm"><i class="fas fa-xmark"></i></span>
          <h1 class="section_title" id="Formations">Nos Formations</h1>
          <div class="loading--formation-items">
            ⁡⁣⁣⁢ <!--Item -->⁡⁡
            <div class="programme--item">
              <div class="logo">
                <img src="{{asset('clientSHop/images/call.jpg')}}" alt="">
                <span>Call Center</span>
              </div>
              <div class="programme--item-descri">
                <h3>Francophone | Anglophone</h3>
                <ul>
                  <li>Metier Teleoperateur</li>
                  <li>Info bureautique</li>
                  <li>Renforcement de langue</li>
                </ul>
              </div>
              <div class="programme--item-prog">
                <table>
                  <tr>
                    <td>1.5 Mois:</td>
                    <td>200 000 Ar/Mois</td>
                  </tr>
                  <tr>
                    <td>04 Mois:</td>
                    <td>120 000 Ar/Mois</td>
                  </tr>
                  <tr>
                    <td>Accélérée <br> <strong>Spécial</strong><br>Samedi</td>
                    <td>50 000 Ar <br>02 Samedis</td>
                  </tr>
                </table>
              </div>
            </div>
            ⁡⁣⁣⁢<!--Item -->⁡
            ⁢ <!--Item -->⁡⁡
            <div class="programme--item">
              <div class="logo">
                <img src="{{asset('clientSHop/images/dev.jpg')}}" alt="">
                <span>Dev Web</span>
              </div>
              <div class="programme--item-descri">
                <h3>Front | Back</h3>
                <ul>
                  <li>Metier Teleoperateur</li>
                  <li>Info bureautique</li>
                  <li>Renforcement de langue</li>
                </ul>
              </div>
              <div class="programme--item-prog">
                <table>
                  <tr>
                    <td>1.5 Mois:</td>
                    <td>200 000 Ar/Mois</td>
                  </tr>
                  <tr>
                    <td>04 Mois:</td>
                    <td>120 000 Ar/Mois</td>
                  </tr>
                  <tr>
                    <td>Accélérée <br> <strong>Spécial</strong><br>Samedi</td>
                    <td>50 000 Ar <br>02 Samedis</td>
                  </tr>
                </table>
              </div>
            </div>
            ⁡⁣⁣⁢<!--Item -->
            ⁢ <!--Item -->⁡⁡
            <div class="programme--item">
              <div class="logo">
                <img src="{{asset('clientSHop/images/graphic.jpg')}}" alt="">
                <span>Graphic design</span>
              </div>
              <div class="programme--item-descri">
                <h3>Francophone | Anglophone</h3>
                <ul>
                  <li>Metier Teleoperateur</li>
                  <li>Info bureautique</li>
                  <li>Renforcement de langue</li>
                </ul>
              </div>
              <div class="programme--item-prog">
                <table>
                  <tr>
                    <td>1.5 Mois:</td>
                    <td>200 000 Ar/Mois</td>
                  </tr>
                  <tr>
                    <td>04 Mois:</td>
                    <td>120 000 Ar/Mois</td>
                  </tr>
                  <tr>
                    <td>Accélérée <br> <strong>Spécial</strong><br>Samedi</td>
                    <td>50 000 Ar <br>02 Samedis</td>
                  </tr>
                </table>
              </div>
            </div>
            ⁡⁣⁣⁢<!--Item -->
            ⁡
          </div>
        </div>
        ⁡⁢⁣⁢ <!-- Formation Your data-->⁡⁡
        ⁡⁢⁣⁣ <!-- Formateur -->⁡
        <h1 id="testimonials--link" class="">Nos Formateurs</h1>
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper" id="Formateur" >
              <!-- Slides -->
              @foreach ($formateur as $form)

              <div class="swiper-slide formateur--item">
                  <div class="img-avatar">
                    <img src="{{asset('storage/formateur/my_images/'.$form->image)}}" alt="">
                </div>
                <div class="card-text">
                    <div class="portada">
                    </div>
                    <div class="title-total">
                        <div class="title">{{$form->adiresy}}</div>
                        <h2>{{ $form->anarana}} {{$form->fanampiny}}</h2>
                        <div class="desc">Tanjona has collected ants since they were six years old and now has many
                            dozen
                            ants but
                            none in their pants.</div>
                        <div class="actions">
                            <button><i class="fab fa-linkedin"></i></button>
                            <button><i class="far fa-envelope"></i></button>
                            <button><i class="fab fa-facebook"></i></button>
                        </div>
                    </div>
                  </div>
                  
              </div>
              @endforeach
          </div>
      </div>

        ⁡⁢⁣⁣<!-- Formateur -->⁡
      </div>
    </div>
  </section>

  <!-- ABOUT FORMATIONS FORMATEUR -->

  <!--EVENT-->

  <section class="event" id="Evenement">
    <h1 class="section_title">Evenements</h1>
    <!-- event design-->
    <div class="event--design"></div>
    <div class="event--design"></div>
    <div class="event--design"></div>
    <!-- event design-->
    <!-- Silder Evenemtn-->
    <div class="blog-slider">
      <div class="blog-slider__wrp swiper-wrapper">
        @foreach ($evenement as $even)
        <div class="blog-slider__item swiper-slide">
          <div class="blog-slider__img">
            <img src="{{asset('storage/evenement/my_images/'.$even->ImageEvenement)}}" alt="">
          </div>
          <div class="blog-slider__content">
            <span class="blog-slider__code">{{$even->DateEvenement}}</span>
            <div class="blog-slider__title">{{$even->NomEvenement}}</div>
            <div class="blog-slider__text">{{$even->DescEvenement}}</div>
            <!-- <Plus href="#" class="blog-slider__button">Plus d'infos</a> -->
          </div>
        </div>
        @endforeach
        
        {{-- <div class=" blog-slider__item swiper-slide">
          <div class="blog-slider__img">
            <img src="public/images/event-2.jpg" alt="">
          </div>
          <div class="blog-slider__content">
            <span class="blog-slider__code">23 octobre 2023</span>
            <div class="blog-slider__title">UI/UX</div>
            <div class="blog-slider__text">Concours design</div>
            <!-- <a href="#" class="blog-slider__button">Plus d'infos</a> -->
          </div>
        </div>

        <div class="blog-slider__item swiper-slide">
          <div class="blog-slider__img">
            <img src="public/images/event-3.jpg" alt="">
          </div>
          <div class="blog-slider__content">
            <span class="blog-slider__code">6 Novembre 2023</span>
            <div class="blog-slider__title">Php contest</div>
            <div class="blog-slider__text">Hackaton back-end (php)</div>
            <!-- <a href="#" class="blog-slider__button">Plus d'infos</a> -->
          </div>
        </div> --}}

      </div>
      <div class="blog-slider__pagination"></div>
    </div>
    <!-- Silder Evenemtn-->
  </section>
  <!--EVENT-->


  <!-- EXTRAIT PROJET  -->
  <section class="extrait" id="Extrait">
    <h2 class="section_title extrait_title">Extraits</h2>
    <div class="container-extrait">
      <div class="slide-extrait">
        @foreach ($extrait as $ex)
          <div class="item-extrait" style="background: url({{asset('storage/extrait/my_images/'.$ex->imageExtrait)}}) center/cover no-repeat; border-radius:2rem;">
            <div class="content">
              <div class="name">{{$ex->Nom}}</div>
              <div class="des"><a href="">{{$ex->LienGithub}}</a></div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="btn-extrait">
        <button class="prec"><i class="fas fa-angle-left"></i></button>
        <button class="next"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
  </section>

  <section class="section testimonials" id="Testimonial">
    <h1 class="section_title">Testimonials</h1>
    <div class="swiper mySwiper testimonials-swiper">
      <div class="swiper-wrapper"> 
      @foreach ($testimonial as $test)
        <div class="testimonials-swiper-slide swiper-slide">          
          <figure class="testimonials-content">           
            <blockquote> {{$test->description}} </blockquote>
            <div class="testimonials-author">
              <img src="{{asset('storage/testimonial/my_images/'.$test->imageTestimonial)}}" alt="sq-sample1" />
              <h5 class="testimonials-profile"> {{$test->nom}} <span> {{$test->prenom}} </span></h5>
            </div>
          </figure>
        </div>
        @endforeach
      </div>
      <div class="testimonials-btn swiper-button-next"></div>
      <div class="testimonials-btn swiper-button-prev"></div>
      <div class="swiper-pagination testimonials-paginations"></div>
    </div>
  </section>

  {{-- <section class="section10" id="slider">
    <div class="container">
        <div class="subcontainer">
            <div class="slider-wrapper">
                <div>
                    <h2 class="titre-partenaire">Partenaires</h2>
                </div>
                <br>
                <div class="my-slider">
                    <div>
                        <div class="slide">
                            <div class="slide-img img-1">
                                <img src="{{asset('image/partenaires/bianco.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-2">
                                <img src="{{asset('image/partenaires/croixrouge_lux_750.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-3">
                                <img src="{{asset('image/partenaires/ifrc.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-4">
                                <img src="{{asset('image/partenaires/logo-ministere-sante.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-5">
                                <img src="{{asset('image/partenaires/logo_bngrc.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-6">
                                <img src="{{asset('image/partenaires/oms.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-7">
                                <img src="{{asset('image/partenaires/logoallemande.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-8">
                                <img src="{{asset('image/partenaires/logoPiroi.jpg')}}" alt="" class="img-partenaire">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
  <!--Testimonials-->

  <!-- LOCALISATION  -->
  <section class="localisation">
    <h1 class="section_title localisation_title">LOCALISATION</h1>

    <div class="localisation_content">
      <!-- description  -->
      <div class="localisation_desc">
        <div class="localisation_desc-content">
          <h2 class="localistion_desc-title">Trouvez-nous à l'aide du map</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequatur corrupti iste
            iusto nihil, non eaque
            nulla distinctio pariatur repudiandae laborum recusandae id assumenda vitae.</p>
          <button class="btn localisation_desc-btn" id="btn-viewContact">Contactez nous</button>
        </div>
      </div>

      <!-- iframes  -->
      <div class="localisation_iframe">
        <div id="map"></div>
      </div>
    </div>
  </section>

  <!-- CONTACT  -->
  {{-- <div class="contact">
    <h1 class="section_title contact_title center">Contact</h1>

    <div class="contact_content">
      <!-- contact images  -->
      <div class="contact_desc">
        <!-- <img src="public/images/contact.png" class="contact_img" alt=""> -->
        <div class="contact_desc-content">
          <h2 class="contact_desc-title">Contactez Nous</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quo dolor quis beatae,
            aliquid atque dolore eaque eius, debitis vel culpa eligendi architecto non! Quas deserunt
            ratione aspernatur obcaecati assumenda.</p>
        </div>
      </div>

      <!-- contact form  -->
      <div class="contact_form">
        <form action="{{ route('contact') }}" method="post">
          @csrf
          @if(Session::has('error'))
              <div class="alert alert-danger">
                  {{ Session::get('error') }}
              </div>
          @endif
          @if (Session::has('succes'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
          @endif
          <input type="text" name="nom" id="" class="input" placeholder="Nom">
          <input type="email" name="email" id="" class="input" placeholder="Email">
          <input type="text" name="sujet" id="" class="input" placeholder="sujet">
          <textarea name="message" class="input" id="" cols="30" rows="20" placeholder="Votre message"></textarea>
          <button class="btn contact_form-btn">Envoyer</button>
        </form>
      </div>
    </div>
  </div> --}}

  <!-- CONTACT  -->
  <div class="contact" id="Contact">
    <h1 class="section_title contact_title center">Contact</h1>

    <div class="contact_content">
      <!-- contact images  -->
      <div class="contact_desc">
        <!-- <img src="public/images/contact.png" class="contact_img" alt=""> -->
        <div class="contact_desc-content">
          <h2 class="contact_desc-title">Contactez Nous</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quo dolor quis beatae,
            aliquid atque dolore eaque eius, debitis vel culpa eligendi architecto non! Quas deserunt
            ratione aspernatur obcaecati assumenda.</p>
        </div>
      </div>
      <!-- contact form  -->
      <div class="contact_form">
        <form action="{{ route('contact') }}" method="post">
          @csrf
          @if(Session::has('error'))
              <div class="alert alert-danger">
                  {{ Session::get('error') }}
              </div>
          @endif
          @if (Session::has('succes'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
          @endif
          <input type="text" name="nom" id="" class="input" placeholder="Nom">
          <input type="email" name="email" id="" class="input" placeholder="Email">
          <input type="text" name="sujet" id="" class="input" placeholder="sujet">
          <textarea name="message" class="input" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
          <button class="btn contact_form-btn">Envoyer</button>
        </form>
      </div>
    </div>
  </div>

  <script>
     // style extrait
      let prec = document.querySelector('.prec');
      let nexta = document.querySelector('.next');
      nexta.addEventListener('click', ()=>{
        let items = document.querySelectorAll('.item-extrait')
        document.querySelector('.slide-extrait').appendChild(items[0]);
      });
      prec.addEventListener('click', ()=>{
        let items = document.querySelectorAll('.item-extrait')
        document.querySelector('.slide-extrait').prepend(items[items.length-1]);
      });

     // style slider partenaire
     let slider = tns({
        container : ".my-slider",
        "slideBy" : "1",
        "speed":400,
        "nav":false,
        autoplay:true,
        controls:false,
        autoplayButtonOutput:false,
        responsive:{
            1600:{
                items:4,
                gutten:20
            },
            1024:{
                items:3,
                gutten:20
            },
            768:{
                items:2,
                gutten:20
            },
            480:{
                items:1
            }
        }
    });
  </script>
@endsection
