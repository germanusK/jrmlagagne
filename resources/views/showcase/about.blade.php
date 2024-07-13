@extends('showcase.layout')
@section('style')
    <style>
        .page-header{
            background-image: url("{{ asset('assets/img/project_image2.jpg') }}");
            background-color: var(--color-primary);
            background-position: center;
            background-blend-mode: multiply;
            background-size: cover;
        }
    </style>
@endsection
@section('content')

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 class="text-capitalize">à propos</h2>
                <p>Découvrez qui nous sommes, notre engagement envers l'excellence et notre passion pour réaliser vos projets avec précision et innovation</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container text-capitalize">
            <ol>
              <li><a href="{{ route('public.home') }}">Accueil</a></li>
              <li>à propos</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2 class="text-capitalize">à propos</h2>
            <p class="text-justify">L’entreprise JRMLC a été mise sur pied par des promoteurs qui disposent chacun d’une longue expérience en Génie Civil et en Génie Industriel du fait de leur passage dans plusieurs prestigieuses entreprises de la place. Les principaux atouts de  JRMLC reposent sur la trilogie suivante : les ressources humaines, l’arrimage aux normes internationales de  construction, de  maintenance industrielle et le respect des délais et des couts.</p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <img src="{{ asset('assets/img') }}/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
              <p>Notre entreprise, implantée à Kribi, est spécialisée dans le secteur Industriel : notamment le Génie civil, la Topographie, la Cartographie, la Construction et fabrication Mécanique, Maintenance Industrielle, Construction Métallique et tuyauterie, la Construction navale, la Mécanique et Réparation navale, Soudure générale et autres prestations maritimes diverses.</p>
              <p>Dans ce cadre d'activités, elle s'occupe de la conception jusqu’au montage des hangars métalliques, de la conception et de la construction des bâtiments, de la conception et production des pièces mécaniques de rechange, de la maintenance et du dépannage des machines industrielles ainsi que des chaînes de production, la réfection et l’entretien des systèmes hydrauliques, de l’installation et de l’entretien des systèmes de froid et climatisation.</p>
              <p>Nos services ont par conséquent pu acquérir l'expérience et la compétence pour étudier, planifier, estimer le budget nécessaire à de telles opérations et conduire ou accompagner un projet de la phase d'étude jusqu'à son terme. A cet effet, nous nous tenons à votre disposition pour mener à bonnes fins toute opération que vous choisiriez de nous confier</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p>Le processus de collaboration comprend :</p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Analyser, identifier et établir vos besoins.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Élaborer une feuille de route ou un cahier des charges.</li>
                  <li><i class="bi bi-check-circle-fill"></i>S'aligner étroitement sur vos exigences grâce à la collecte de données sur place.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Apporter des solutions efficaces avec l'aide d'experts spécialisés.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Offrir un soutien et des conseils continus.</li>
                  <li><h4 class="heading margin-top-5">RAISONS DE CHOISIR JRMLC</h4></li>
                  <li><p>JRMLC est une entreprise réactive et efficace, offrant une gamme diversifiée de services dans le domaine de la prestation de services. Chaque jour, nous entreprenons des initiatives d'innovation pour garantir la satisfaction de nos clients.</p></li>
                  <li><i class="bi bi-check-circle-fill"></i><b class="h5">Expertise du Personnel :</b> Notre équipe possède les compétences nécessaires pour gérer votre projet, de la phase de brainstorming jusqu'à sa mise en œuvre réussie.</li>
                  <li><i class="bi bi-check-circle-fill"></i><b class="h5">Ingénieurs et Techniciens Expérimentés :</b> Nos experts chevronnés apportent une expérience et des compétences précieuses à chaque projet.</li>
                  <li><i class="bi bi-check-circle-fill"></i><b class="h5">Personnel Dynamique et Hautement Qualifié :</b> Notre équipe jeune et énergique est hautement qualifiée et dédiée à l'excellence.</li>
                  <li><i class="bi bi-check-circle-fill"></i><b class="h5">Partenariats Solides :</b> Nous collaborons avec diverses entreprises partenaires pour soutenir nos projets variés.</li>
                  <li><i class="bi bi-check-circle-fill"></i><b class="h5">Relations Fiables avec les Fournisseurs :</b> Nous maintenons des liens solides avec les principaux fournisseurs locaux et internationaux, garantissant un approvisionnement régulier en accessoires hydrauliques, pneumatiques, mécaniques, et même en machines-outils.</li>
                </ul>

                {{-- <div class="position-relative mt-4">
                  <img src="{{ asset('assets/img') }}/about-2.jpg" class="img-fluid rounded-4" alt="">
                  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div> --}}
              </div>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

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
                <img src="{{ asset('assets/img/team') }}/team-1.jpg" class="img-fluid" alt="">
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
                <img src="{{ asset('assets/img/team') }}/team-2.jpg" class="img-fluid" alt="">
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
                <img src="{{ asset('assets/img/team') }}/team-3.jpg" class="img-fluid" alt="">
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
                <img src="{{ asset('assets/img/team') }}/team-4.jpg" class="img-fluid" alt="">
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
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        {{-- <div class="section-header">
          <h2>Pricing</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div> --}}

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>QUALITÉ</h3>
              <div class="icon">
                <i class="bi bi-snow"></i>
              </div>

              <div class="text-center">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Accroître notre réactivité face aux demandes de nos clients</li>
                  <li><i class="bi bi-check-circle-fill"></i>Améliorer la qualité de nos produits et de nos services</li>
                  <li><i class="bi bi-check-circle-fill"></i>Développer les compétences de nos employés</li>
                  <li><i class="bi bi-check-circle-fill"></i>Répondre aux attentes de nos clients par une prestation de qualité ainsi qu’une écoute et une disponibilité à tous les instants</li>
                </ul>
              </div>
            </div>
          </div><!-- End Pricing Item -->
          
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>SÉCURITÉ ET SANTÉ</h3>
              <div class="icon">
                <i class="bi bi-star"></i>
              </div>
              <div class="text-center">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Tendre vers le « Zéro Accident »</li>
                  <li><i class="bi bi-check-circle-fill"></i>Port obligatoire des EPI (Équipements de Protection Individuelle)</li>
                  <li><i class="bi bi-check-circle-fill"></i>Prévenir les maladies professionnelles</li>
                  <li><i class="bi bi-check-circle-fill"></i>Réduire les risques aux postes de travail</li>
                  <li><i class="bi bi-check-circle-fill"></i>Prévenir les crises majeures</li>
                </ul>
              </div>
              {{-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> --}}
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>ENVIRONNEMENT</h3>
              <div class="icon">
                <i class="bi bi-trophy"></i>
              </div>
              <div class="text-center">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Prévenir les impacts environnementaux</li>
                  <li><i class="bi bi-check-circle-fill"></i>Réduire nos déchets et améliorer leur valorisation</li>
                  <li><i class="bi bi-check-circle-fill"></i>Optimiser notre utilisation des ressources naturelles</li>
                  <li><i class="bi bi-check-circle-fill"></i>Garantir la gestion et la provenance de toutes les substances</li>
                </ul>
              </div>
              {{-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> --}}
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->


    </main><!-- End #main -->

@endsection
