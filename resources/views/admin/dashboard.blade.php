@extends('admin.layout')
@section('section')
    <div class="row">

      <!-- Left side columns -->
      <div class="">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xl-4 col-sm-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Services</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-hash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $service_count??0 }}</h6>
                    <span class="text-muted small pt-2 ps-1">total</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xl-4 col-sm-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Projects</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-hash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $project_count??0 }}</h6>
                    <span class="text-muted small pt-2 ps-1">total</span>

                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xl-4 col-sm-6">

            <div class="card info-card customers-card">

              <div class="card-body">
                <h5 class="card-title">Property</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-hash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $property_count??0 }}</h6>
                    <span class="text-muted small pt-2 ps-1">total</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <hr class="col-12 my-3">

          <!-- Customers Card -->
          <div class="col-xl-3 col-sm-6 col-md-4">

            <div class="card info-card customers-card">

              <div class="card-body">
                <h5 class="card-title">Service #</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-muted small pt-2 ps-1">Projects</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->
        </div>
      </div><!-- End Left side columns -->

    </div>
@endsection