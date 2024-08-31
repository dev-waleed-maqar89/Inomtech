@extends('admin.index')
@section('admin') 




<div class="col-md-12">

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                  </div>
              

                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Project link</label>
                      <input type="text" name="link" class="form-control" id="exampleInputEmail1">
                    </div>
                

                  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project description</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote" name="content">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
         
          </div>
        </div>
        <!-- /.col-->
      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image">
                      
                      </div>
                    
                    </div>
                  </div>
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


</div>











@endsection