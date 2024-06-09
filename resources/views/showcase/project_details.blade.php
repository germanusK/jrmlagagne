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
                <h2>Project Details</h2>
                <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="{{ route('public.home') }}">Home</a></li>
              <li><a href="{{ route('public.projects') }}">Projects</a></li>
              <li>Project Details</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Blog Details Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row g-5">

            <div class="col-lg-8">

              <article class="blog-details">

                <div class="post-img">
                  <img src="{{ asset('assets/img/project_image1.jpg') }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a href="blog-details.html">Gobata Junction, Dongba-Bewate, Kiriku, Togo</a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  
                  <blockquote>
                    <p>
                      Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                    </p>
                  </blockquote>


                </div><!-- End post content -->

                
                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio sections-bg">
                  <div class="container" data-aos="fade-up">
                    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                      <div class="row gy-4 portfolio-container">

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                          <div class="portfolio-wrap">
                            <a href="{{ asset('assets/img') }}/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                          </div>
                        </div><!-- End Portfolio Item -->

                      </div><!-- End Portfolio Container -->

                    </div>

                  </div>
                </section><!-- End Portfolio Section -->

              </article><!-- End blog post -->


            </div>

            <div class="col-lg-4">

              <div class="sidebar">

                <div class="sidebar-item categories">
                  <h3 class="sidebar-title">Project Categories</h3>
                  <ul class="mt-3">
                    <li><a href="#">service 1 <span>(25)</span></a></li>
                    <li><a href="#">service 2 <span>(25)</span></a></li>
                    <li><a href="#">service 3 <span>(25)</span></a></li>
                    <li><a href="#">service 4 <span>(25)</span></a></li>
                    <li><a href="#">service 5 <span>(25)</span></a></li>
                    <li><a href="#">service 6 <span>(25)</span></a></li>
                  </ul>
                </div><!-- End sidebar categories-->

                <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Related</h3>

                  <div class="mt-3">

                    <div class="post-item mt-3">
                      <img src="{{ asset('assets/img') }}/blog/blog-recent-1.jpg" alt="">
                      <div>
                        <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                      </div>
                    </div><!-- End recent post item-->

                    <div class="post-item">
                      <img src="{{ asset('assets/img') }}/blog/blog-recent-2.jpg" alt="">
                      <div>
                        <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                      </div>
                    </div><!-- End recent post item-->

                    <div class="post-item">
                      <img src="{{ asset('assets/img') }}/blog/blog-recent-3.jpg" alt="">
                      <div>
                        <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                      </div>
                    </div><!-- End recent post item-->

                    <div class="post-item">
                      <img src="{{ asset('assets/img') }}/blog/blog-recent-4.jpg" alt="">
                      <div>
                        <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                      </div>
                    </div><!-- End recent post item-->

                    <div class="post-item">
                      <img src="{{ asset('assets/img') }}/blog/blog-recent-5.jpg" alt="">
                      <div>
                        <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                      </div>
                    </div><!-- End recent post item-->

                  </div>

                </div><!-- End sidebar recent posts-->

              </div><!-- End Blog Sidebar -->

            </div>
          </div>

        </div>
      </section><!-- End Blog Details Section -->
    </main><!-- End #main -->
@endsection
