@extends('admin.index')
@section('admin')
    <div class="col-md-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Project</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Project Name in English</label>
                        <input type="text" name="name_en" class="form-control" id="exampleInputEmail1">
                        @error('name_en')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Project Name in Arabic</label>
                        <input type="text" name="name_ar" class="form-control" id="exampleInputEmail1">
                        @error('name_ar')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Project link</label>
                            <input type="text" name="link" class="form-control" id="exampleInputEmail1">
                            @error('link')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
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
                                            <h3>English description</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea id="summernote_en" name="content_en">
                                            </textarea>
                                            @error('content_en')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3>Arabic description</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea id="summernote_ar" name="content_ar">
                                            </textarea>
                                            @error('content_ar')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.col-->
                        </section>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image">
                                    @error('image')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="department">Choose department</label>
                            <select class="form-control" name="department_id" id="department">
                                @forelse ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name_en }}</option>
                                @empty
                                @endforelse
                            </select>
                            @error('department_id')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
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
