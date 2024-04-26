@extends('showcase.layout')
@section('content')
  <!-- ======= Hero Section ======= -->
  <div class="position-relative w-100" style="height: auto;">
    <div class="position-absolute w-full" class="height: 100% !important;">
          <img src="{{ asset('assets') }}/img/project_image1.jpg" class="img-fluid" style="width: 100% !important; height: 100%;"  alt="" data-aos="zoom-out" data-aos-delay="100">
    </div>
  </div>
  <section id="hero" class="hero" style="height: auto;">
    <div class="w-100 position-relative" style="height: 75vh;">
      <div class="position-relative gy-5" style="height: 100%;" data-aos="fade-in">
        <div class="position-absolute w-100 d-flex justify-content-end"  style="height: inherit;">
          <img src="{{ asset('assets') }}/img/bg2.jpg" class="img-fluid d-none d-md-block" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
        <div class="position-absolute d-flex flex-column justify-content-center text-center w-100 px-5" style="height: inherit; background-color: rgba(0, 0, 0, 0.2);">
          <h2 class="text-center">Bienvenue chez <br><span>JRM LAGAGNE CONSTRUCTION</span></h2>
          <p style="font-size:2rem !important;">La solidité de notre construction, votre tranquillité d'esprit</p>
          <div class="d-flex justify-content-center py-5">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Notre Galerie</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-phone"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Contactez-Nous</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-facebook"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sur Facebook</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nos Projets</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    {{-- </div> --}}
  </section>
  <!-- End Hero Section -->

  <main id="main">


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos services</h2>
          <p>Découvrez notre savoir-faire : transformer les rêves en réalité.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="service-item position-relative card">
              <div class="icon">
                <i class="bi bi-bricks"></i>
              </div>
              <h3>Génie maritime</h3>
              <p class="line-clamp-4"> construction navale, mécanique navale, sécurité et sûreté des installations portuaires, prestations maritimes et portuaires</p>
              <a href="#" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="service-item position-relative card">
              <div class="icon">
                <i class="bi bi-flag"></i>
              </div>
              <h3>Genie civil</h3>
              <p class="line-clamp-4">Étude et conception, maisons individuelles, bâtiments et infrastructures industriels, rénovation, travaux publics</p>
              <a href="#" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="service-item position-relative card">
              <div class="icon">
                <i class="bi bi-boxes"></i>
              </div>
              <h3>Architecture</h3>
              <p class="line-clamp-4">Plans architecturaux, design intérieur et extérieur, décoration des murs verticaux ( laquage, peinture, carrelage, lambris...), Décoration des murs horizontaux ( Staff, placo, lambris, faux plafond)</p>
              <a href="#" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="service-item position-relative card">
              <div class="icon">
                <i class="bi bi-cpu"></i>
              </div>
              <h3>Ingénierie</h3>
              <p class="line-clamp-4">Étude et conception, dimensionnement, élaboration des techniques de soudage et des méthodologies de fabrication, construction mécanique</p>
              <a href="#" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="service-item position-relative card">
              <div class="icon">
                <i class="bi bi-map"></i>
              </div>
              <h3>Immobilier</h3>
              <p class="line-clamp-4">Travaux de topographie, achat et vente de terrains, achat et vente des maisons, immatriculation</p>
              <a href="#" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="service-item position-relative card">
              <div class="icon">
                <i class="bi bi-recycle"></i>
              </div>
              <h3>Recyclage de la matière plastique</h3>
              <p class="line-clamp-4">fabrication des pavés, des sceaux, des bols</p>
              <a href="#" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3 class="text-capitalize">Visitez notre chaîne</h3>
        <p>Explorez notre contenu exclusif en visitant notre chaîne. Découvrez des vidéos captivantes, <br> des conseils utiles et bien plus encore. Abonnez-vous pour ne rien manquer de nos mises à jour régulières <br> et rejoignez notre communauté dès aujourd'hui</p>
        <a class="cta-btn text-capitalize" href="#">Avancez d'un pas</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('assets') }}/img/present.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clients Satisfaits</strong> Transformer les rêves en solutions, en conservant vos sourires</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projets Exécutés</strong> Écrivant l'histoire au fur et à mesure de notre avancée</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Années de Travail</strong> au service du grand public</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    
    <!-- ======= Recent Works Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Travaux Récents</h2>
          <p>Bien que nous avançions, nous avons un historique</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('assets') }}/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Service type</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('assets') }}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Works Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos Projets</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item team">
                  <div class="member">
                    <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                    <h4>Project name or Service type</h4>
                    <span>Address</span>
                    <div class="social line-clamp-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed iure cupiditate possimus modi vel? Cupiditate autem amet impedit quam dicta eos reiciendis dignissimos possimus doloribus quis incidunt, perspiciatis itaque.
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets') }}/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Walter White</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        {{-- <div class="section-header">
          <h2>Pricing</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div> --}}

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Our Mission</h3>
              <div class="icon">
                <i class="bi bi-snow"></i>
              </div>

              <div class="text-center heading"><b>Constructing a sustainable future by delivering excellence in every project, fostering innovation, embracing diversity, and prioritizing safety, quality, and client satisfaction</b></div>
              {{-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> --}}
            </div>
          </div><!-- End Pricing Item -->
          
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Our Motto</h3>
              <div class="icon">
                <i class="bi bi-star"></i>
              </div>
              <div class="text-center h2"><b>Building Dreams, Crafting Legacies</b></div>
              {{-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> --}}
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Our Vision</h3>
              <div class="icon">
                <i class="bi bi-trophy"></i>
              </div>
              <div class="text-center heading"><b>Pioneering sustainable practices, and leaving a lasting legacy of craftsmanship and innovation that inspires generations to come</b></div>
              {{-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> --}}
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
@endsection
