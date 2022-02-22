@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">

                <a href=" {{ route('course.index') }} " class="btn btn-info">Course</a>
            </div>
            <div class="card-body">
                @if (Session()->has('success'))
                <script>
                swal("Seccess", "{{ Session()->get('success') }}", "success")
                </script>
                @endif
                <form action="{{route('course.update',[$course->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('img') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="img">
                            <div class="w-25 justify-content-end">
                                <img src="{{asset($course->img)}}" alt="" height="70px" width="70px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Service Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('course_name') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="course_name" value="{{$course->course_name}}">
                            @if ($errors->has('course_name'))
                            <span class="text-danger">{{ $errors->first('course_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('logo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="description" value="{{$course->description}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection