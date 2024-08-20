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
                <h2>{{$project->title}}</h2>
                <p>{{$project->caption}}</p>
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
                  <img src="{{ $project->featured_image != null ? $project->featured_image : asset('assets/img/project_image1.jpg') }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">{{$project->title}}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a>{{$project->start_date->format('l M dS Y')}}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-setting">&acirc;</i> <a>{{$project->service->title}}</a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  
                  <blockquote>
                    <p>
                      {{$project->description??$project->caption}}
                    </p>
                  </blockquote>


                </div><!-- End post content -->

                
                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio sections-bg">
                  <div class="container" data-aos="fade-up">
                    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                      <div class="row gy-4 portfolio-container">
                        @forelse ($project->images as $image)
                          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                              <a href="{{ $image->image_path??'' }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ $image->image_path??'' }}" class="img-fluid" alt=""></a>
                            </div>
                          </div><!-- End Portfolio Item -->                          
                        @empty
                          @for($i = 0; $i < 12; $i++)
                            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                              <div class="portfolio-wrap">
                                <a href="{{ asset('assets/img') }}/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img') }}/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                              </div>
                            </div><!-- End Portfolio Item -->                            
                          @endfor                      
                        @endforelse
                      </div><!-- End Portfolio Container -->

                    </div>

                  </div>
                </section><!-- End Portfolio Section -->

              </article><!-- End blog post -->


            </div>

            <div class="col-lg-4">

              <div class="sidebar">

                <div class="sidebar-item categories">
                  <h3 class="sidebar-title">Projets</h3>
                  <ul class="mt-3">
                    @foreach ($services as $service)
                      <li><a href="{{route('public.projects', $service->id)}}">{{$service->title}} <span>({{$service->projects()->count()}})</span></a></li>
                    @endforeach
                  </ul>
                </div><!-- End sidebar categories-->

                <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Related</h3>

                  <div class="mt-3">
                    @foreach ($related_projects as $project)
                      <div class="post-item d-flex my-2">
                        <img src="{{ $project->featured_image != null ? $project->featured_image : asset('assets/img/bg2.jpg') }}" alt="" class="img-fluid rounded" style="height: 5rem;">
                        <div>
                          <h4><a href="{{route('public.project', $project->id)}}">{{$project->title}}</a></h4>
                          <span>{{$project->start_date->format('l M dS Y')}}</span>
                        </div>
                      </div><!-- End recent post item-->
                    @endforeach

                    
                  </div>

                </div><!-- End sidebar recent posts-->

              </div><!-- End Blog Sidebar -->

            </div>
          </div>

        </div>
      </section><!-- End Blog Details Section -->
    </main><!-- End #main -->
@endsection
