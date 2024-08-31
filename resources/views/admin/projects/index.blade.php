@extends('admin.index')
@section('admin')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Condensed Full Width Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Arabic name</th>
                            <th>English name</th>
                            <th>Arabic content</th>
                            <th>English content</th>
                            <th>image</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($projects as $key => $project)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $project->name_ar }}</td>
                                <td>{{ $project->name_en }}</td>
                                <td>
                                    {!! $project->content_ar !!}
                                </td>
                                <td>
                                    {!! $project->content_en !!}
                                </td>
                                <td>
                                    <img src="{{ asset($project->image) }}" alt="Project Image"
                                        style="width:40px; height:40px">

                                </td>


                                <td>

                                    <form action="{{ route('project.destroy', $project->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">X</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
