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
                <h2>About Us</h2>
                <p>Cultivating Dreams into Keys: Your Trusted Real Estate Partner</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="{{ route('public.home') }}">Home</a></li>
              <li>About Us</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>About Us</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <img src="{{ asset('assets/img') }}/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
              <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
              <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>

                <div class="position-relative mt-4">
                  <img src="{{ asset('assets/img') }}/about-2.jpg" class="img-fluid rounded-4" alt="">
                  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>
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


    </main><!-- End #main -->

@endsection
