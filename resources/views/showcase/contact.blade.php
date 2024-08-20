@extends('showcase.layout')
@section('style')
    <style>
        .page-header{
            background-image: url("{{ asset('assets/img/contact-bg.jpg') }}");
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
                <h2>Contactez-nous</h2>
                <p>Besoin d'aide? Contactez-nous dès maintenant pour toute assistance ou renseignement. Nous sommes là pour vous.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="{{ route('public.home') }}">Accueil</a></li>
              <li>Contact</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Contact</h2>
            <p>Nous sommes là pour vous, contactez-nous.</p>
          </div>

          <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>Carrefour BOCOM, Dombe Kribi, Région Sud Cameroun</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>info@jrmlagagne.com / jrmlagagne@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <p>+237 695209244/ 694393145/ 658550208</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Open Hours:</h4>
                    <p>Mon-Sat: 09AM - 05PM</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

            </div>

            <div class="col-lg-8">
              <form method="post" role="form" class="php-email-form" action="{{Request::url()}}">
                @csrf
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

      
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d996.1295446222761!2d9.925518269433216!3d2.9536083391377232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scm!4v1723990345318!5m2!1sen!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main><!-- End #main -->
@endsection
