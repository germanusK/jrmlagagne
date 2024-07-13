@extends('admin.layout')
@section('section')
    <div class="py-2">
        <div class="container-fluid  px-5 d-flex justify-content-end my-2">
            <a class="btn btn-primary btn-rounded" href="{{ request()->url() }}/edit">Edit Images</a>
        </div>
        <hr class="separator border-bottom border-secondary">
        <div class="container-fluid row">
            @foreach ((($images != null and $images->count() > 0) ? $images : [['image_url'=>asset('admin/assets/img/news-4.jpg') ], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')], ['image_url'=>asset('admin/assets/img/news-4.jpg')]]) as $image)
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card margin-bottom-2 p-0 shadow ">
                        <div class="card-body p-0">
                            <img class="card-img img img-thumbnail img-fluid" data-bs-toggle="modal" data-bs-target=".modal" src="{{ $image['image_url'] }}">

                            <div class="modal fade" id="largeModal" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    {{-- <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div> --}}
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <img src="{{ $image['image_url'] }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div><!-- End Large Modal-->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection