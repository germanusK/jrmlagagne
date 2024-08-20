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
        <div class="page-header d-flex align-items-center">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Nos Projets</h2>
                <p>Explorer les possibilités, façonner l'avenir, projet par projet.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="{{ route('public.home') }}">Accueil</a></li>
              <li>Nos Projets</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4 posts-list">

            @foreach($projects->items() as $project)
              <div class="col-xl-4 col-md-6">
                <article>

                  <div class="post-img">
                    <img src="{{ $project->featured_image != null ? $project->featured_image : asset('assets/img/bg2.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h3 class="title">
                    <a href="{{ route('public.project', ['project_slug'=>$project->id]) }}">{{$project->title}} &RightAngleBracket; &RightAngleBracket; {{$project->service->title}} </a>
                  </h3>

                  <p class="post-category">{{$project->service->caption}} </p>

                </article>
              </div><!-- End post list item -->
            @endforeach

          </div><!-- End blog posts list -->

        </div>
      </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
