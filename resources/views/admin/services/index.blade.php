@extends('admin.layout')
@section('section')
    <div class="py-3">
        <table class="table table-dark datatable">
            <thead class="text-uppercase">
                <th>SN</th>
                <th>Title</th>
                <th>caption</th>
                <th>details</th>
                <th></th>
            </thead>
            <tbody>
                @php
                    $c = 1;
                @endphp
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $service->title??'' }}</td>
                        <td><span class="line-clamp-3">{{ $service->caption??'' }}</span></td>
                        <td><span class="line-clamp-3">{!! $service->details??'' !!}</span></td>
                        <td>
                            <a class="rounded-1 btn btn-primary btn-sm m-1" href="{{ route('admin.services.index', $service->id) }}">details</a>
                            <a class="rounded-1 btn btn-success btn-sm m-1" href="{{ route('admin.services.editor', $service->id) }}">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script></script>
@endsection