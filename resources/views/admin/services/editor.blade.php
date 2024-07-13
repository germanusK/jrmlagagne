@extends('admin.layout')
@section('section')
    <div class="py-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $title??'' }}</h5>

                <!-- Horizontal Form -->
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Service Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" placeholder="service name here" value="{{ $service->title??'' }}" required class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Caption</label>
                        <div class="col-sm-10">
                            <input type="text" name="caption" required placeholder="service caption here" value="{{ $service->caption??'' }}" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Featured Image</label>
                        <div class="col-sm-10 row">
                            <div class="col-lg-6">
                                <div class="container-fluid px-0 mx-0">
                                    <img class="img img-thumbnail img-fluid" id="featured_image_tag" src="{{ ($service->featured_image??null) == null ? asset('admin/assets/img/news-5.jpg') : $service->featured_image }}">
                                </div>
                            </div>
                            <div class="col-lg-6 py-2">
                                <input type="file" class="form-control" accept="image/*" name="featured_image" id="featured_image_input">
                            </div>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Description</legend>
                        <div class="col-sm-10">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" requried name="details" placeholder="Provide service details here">
                                        {!! $service->details??'' !!}
                                    </textarea><!-- End TinyMCE Editor -->
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End Horizontal Form -->

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('#featured_image_input').onchange = function(){
            let selected_file = this.files[0];
            console.log(selected_file);
            let object_url = URL.createObjectURL(selected_file);
            document.querySelector('#featured_image_tag').src =  object_url;
        }
    </script>
@endsection