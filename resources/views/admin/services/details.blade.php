@extends('admin.layout')
@section('section')
    <div class="py-3">
        <section class="section profile">
            <div class="row">
                <div class="col-lg-10 offset-lg-2">

                <div class="card">
                    <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.services.editor', $service-> id) }}">Edit</a>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{ $service->title??'' }}</h5>
                            <div class="caption text-secondary">{{ $service->caption??'' }}</div>
                            <hr class="border border-dark my-4">
                            <p class="">{!! $service->details??'' !!}</p>

                            <div class="container-fluid px-0 py-4">
                                <img class="img-responsive img-fluid" src="{{ $service->featured_image != null ? $service->featured_image : asset('admin/assets/img/news-4.jpg') }}">
                            </div>

                            <div class="text-end">
                                <a href="{{ route('admin.services.images', $service->id) }}" class="btn btn-outline-secondary">Images</a>
                                <a href="{{ route('admin.services.properties', $service->id) }}" class="btn btn-outline-secondary">Properties</a>
                                <a href="{{ route('admin.services.projects', $service->id) }}" class="btn btn-outline-secondary">Projects</a>
                            </div>
                        </div>

                    </div><!-- End Bordered Tabs -->

                    </div>
                </div>

                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script></script>
@endsection