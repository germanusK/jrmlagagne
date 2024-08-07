@extends('showcase.layout')
@section('style')
    <style>
        .page-header{
            background-image: url("{{ asset('assets/img/project_image4.jpg') }}");
            background-color: var(--color-primary);
            background-position: center;
            background-blend-mode: multiply;
            background-size: cover;
        }

        .info-container{
          background-color: var(--color-primary-transparent) !important;
        }
    </style>
@endsection
@section('content')
    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>{{ $service->title }}</h2>
                <p>{!! $service->caption !!}</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="{{ route('public.home') }}">Home</a></li>
              <li>{{ $service->title }}</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

          <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img') }}/portfolio/app-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img') }}/portfolio/product-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img') }}/portfolio/branding-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/img') }}/portfolio/books-1.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

          </div>

          <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
              <div class="portfolio-description">
                <p>
                  {!! $service->details !!}
                </p>
                <div class="card">
                  <div class="card-body">{!! $service->caption !!}</div>
                </div>

              </div>
            </div>

            <div class="col-lg-3">
              <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong> <span>Web design</span></li>
                  <li><strong>Client</strong> <span>ASU Company</span></li>
                  <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                  <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                  <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                </ul>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Details Section -->


      
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">
              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-airplane flex-shrink-0"></i>
                  <div>
                    <h4>Make service request:</h4>
                    <p>Service Name </p>
                  </div>
                </div><!-- End Info Item -->
              </div>
            </div>

            <div class="col-lg-8">
              <form method="post" role="form" class="php-email-form">
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
