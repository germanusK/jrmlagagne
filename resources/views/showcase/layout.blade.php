<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Reference Health Care | REFHCARE') }}</title>
    <!-- Required meta tags -->
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/logo.gif" rel="icon">
    <link href="{{ asset('assets') }}/img/logo.gif" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <link href="{{ asset('assets/css/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/main.css" rel="stylesheet">

    {{-- General styles --}}
    <style></style>

    {{-- page specific styles --}}
    @yield('style')
</head>

<body>
    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:jrmlagagne@gmail.com">jrmlagagne@gmail.com</a></i>
            <i class="bi bi-envelope d-flex align-items-center ms-4"><a href="mailto:info@jrmlagagne.com">info@jrmlagagne.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:+237 653 640 001">+237 653 640 001</a></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{ $showcase_variables->youtube_link ?? 'https://www.youtube.com/channel/UCkOJE02uys61rw4fU5dg0rQ' }}" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="{{ $showcase_variables->facebook_link ?? 'https://www.facebook.com/profile.php?id=61558073214757' }}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ $showcase_variables->instagram_link ?? 'https://www.instagram.com/jrmlagagne/' }}" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ route('public.home') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets') }}/img/logo.gif" alt="">
                <h1>JRM Lagagne Construction<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar text-capitalize">
                <ul>
                    <li><a href="{{ route('public.home') }}">accueil</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('public.home') }}#services">Tous les services</a></li>
                            @foreach ($services as $service)
                                <li><a href="{{ route('public.service', ['slug'=>$service->id]) }}">{{$service->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>projets</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                        <li><a href="{{ route('public.projects') }}">Tous les projets</a></li>
                        @foreach ($project_services as $service)
                            <li><a href="{{ route('public.projects', ['service_slug'=>$service->id]) }}">{{$service->title}} Projets</a></li>
                        @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('public.about') }}">à propos</a></li>
                    <li><a href="{{ route('public.contact') }}">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <main>
        @yield('content')
    </main>
    
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer border-top">

        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="{{ route('public.home') }}" class="logo" style="line-height: 2rem;">
                    <span>JRM LAGAGNE CONSTRUCTION</span>
                </a>
                <p>Entreprise constituée de Jeunes diplômés qualifiés chacun dans son domaine de compétence. Ses activités principales sont dans le Génie Maritime, le Génie Civil, l’Ingénierie, l’Architecture, la Construction Mécanique, la Construction Métallique, la Menuiserie métallique, aluminium et Inox. Ses réalisations respecte le rapport qualité prix dans le respect des normes et des délais de livraison</p>
                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/profile.php?id=61558073214757" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/jrmlagagne/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCkOJE02uys61rw4fU5dg0rQ" class="youtube"><i class="bi bi-youtube"></i></a>
                    <a href="https://cm.linkedin.com/in/bezeng-mameh-8b7871308" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><a href="{{ route('public.home') }}">Accueil</a></li>
                    <li><a href="{{ route('public.about') }}">À propos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="{{ route('public.projects') }}">Projets</a></li>
                    <li><a href="{{ route('public.contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Services</h4>
                <ul>
                    @foreach ($services as $service)
                        <li><a href="{{route('public.service', $service->id)}}">{{$service->title}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contactez-nous</h4>
                <p>
                    Carrefour BOCOM, Dombe <br>
                    Kribi, Région Sud<br>
                    Cameroun <br><br>
                    <strong>Phone:</strong> <a href="tel:+237695209244">+237 695209244/694393145/658550208</a><br>
                    <strong>Email:</strong> <a href="mailto:info@jrmlagagne.com">info@jrmlagagne.com</a><br>
                    <strong>Email2:</strong> <a href="mailto:jrmlagagne@gmail.com">jrmlagagne@gmail.com</a><br>
                </p>
            </div>

        </div>
        </div>

        <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>JRM LAGAGNE CONSTRUCTION</span></strong>. Tous droits réservés
        </div>
        </div>

    </footer>
    <!-- End Footer -->


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    
    {{-- <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> --}}

    @yield('script')
</body>

</html>