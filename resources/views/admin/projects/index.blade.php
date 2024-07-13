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
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $project->title??'' }}</td>
                        <td><span class="line-clamp-3">{{ $project->caption??'' }}</span></td>
                        <td><span class="line-clamp-3">{!! $project->description??'' !!}</span></td>
                        <td>
                            <a class="rounded-1 btn btn-primary btn-sm m-1" href="{{ route('admin.projects.index', $project->id) }}">details</a>
                            <a class="rounded-1 btn btn-success btn-sm m-1" href="{{ route('admin.projects.editor', $project->id) }}">edit</a>
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