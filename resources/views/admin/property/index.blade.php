@extends('admin.layout')
@section('section')
    <div class="py-3">
        <table class="table table-dark datatable">
            <thead class="text-uppercase">
                <th>SN</th>
                <th>Title</th>
                <th>Specs</th>
                <th>Description</th>
                <th></th>
            </thead>
            <tbody>
                @php
                    $c = 1;
                @endphp
                @foreach ($properties as $property)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $property->title??'' }}</td>
                        <td><span class="line-clamp-3">{{ $property->specifications??'' }}</span></td>
                        <td><span class="line-clamp-3">{!! $property->description??'' !!}</span></td>
                        <td>
                            <a class="rounded-1 btn btn-primary btn-sm m-1" href="{{ route('admin.property.index', $property->id) }}">details</a>
                            <a class="rounded-1 btn btn-success btn-sm m-1" href="{{ route('admin.property.editor', $property->id) }}">edit</a>
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