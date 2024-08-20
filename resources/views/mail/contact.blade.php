<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail - {{url('/')}}</title>
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    
    <div class="card">
        <div class="card-header text-capitalize">
            <h3>Contact Mail From <span class="text-lowercase text-sm text-primary">{{url('/')}}</span></h3>
        </div>
        <div class="card-body">
            <div class="rounded border border-dark bg-dark py-3 my-1 px-4">
                <span class="text-light text-capitalize">Mail submitted by:</span>
                <h5 class="text-white mt-2"><strong>{{$name}}</strong></h5>
            </div>
            <div class="rounded border border-dark bg-dark py-3 my-1 px-4">
                <span class="text-light text-capitalize">Customer email:</span>
                <h6 class="text-white mt-2"><strong>{{$email}}</strong></h6>
            </div>
            <div class="rounded border border-dark bg-dark py-3 my-1 px-4">
                <span class="text-light text-capitalize">Subject:</span>
                <h6 class="text-white mt-2"><strong>{{$subject}}</strong></h6>
            </div>
            <div class="rounded border border-dark bg-dark py-3 my-1 px-4">
                <span class="text-light text-capitalize">Message:</span>
                <p class="text-white mt-2">{!! $text_content !!}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>