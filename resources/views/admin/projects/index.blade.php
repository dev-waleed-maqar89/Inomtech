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
                      <th>name</th>
                      <th>content</th>
                      <th>image</th>
                      <th>actions</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($projects as $key=>$project)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$project->name}}</td>
                      <td>
                      {!! $project->content !!}
                      </td>
                      <td>       
                         <img src="{{ asset('storage/img/' . $project->image) }}" alt="Project Image" style="width:300px;">
                        
                        </td>

                        
                        <td>

                        <form action="{{route('project.destroy',$project->id)}}" method="post" enctype="multipart/form-data">
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