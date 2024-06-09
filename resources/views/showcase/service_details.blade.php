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
                <h2>Service Details</h2>
                <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Service Details</li>
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
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
                <p>
                  Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
                </p>

                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <div>
                    <img src="{{ asset('assets/img') }}/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                  </div>
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
