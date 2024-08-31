@extends('admin.index')
@section('admin')
    <div class="col-md-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New department</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('department.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group">
                        <label for="enName">Department name in English</label>
                        <input type="text" name="name_en" class="form-control" id="enName">
                        @error('name_en')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="arName">Department name in Arabic</label>
                        <input type="text" name="name_ar" class="form-control" id="arName">
                        @error('name_ar')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="enDescription_en">Description in English</label>
                        <textarea name="description_en" id="enDescription_en" class="form-control"></textarea>
                        @error('description_en')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="arDescription">Description in arabic</label>
                        <textarea name="description_ar" id="arDescription" class="form-control"></textarea>
                        @error('description_ar')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image">
                                @error('image')
                                    <div class="text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

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
