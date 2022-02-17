@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">

                <a href=" {{ route('slider.index') }} " class="btn btn-info"> Slider</a>
            </div>
            <div class="card-body">
                @if (Session()->has('success'))
                <script>
                swal("Seccess", "{{ Session()->get('success') }}", "success")
                </script>
                @endif
                <form action="{{route('slider.update',[$slider->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 ">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title"
                            value="{{$slider->title}} ">
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" placeholder="Image" name="slide_img" value="">
                        <div class="w-25 d-flex ">
                            <img src="{{asset($slider->slide_img)}}" alt="" class="justify-content-end shadow borer-2d"
                                height="70px" width="70px">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="" placeholder="Textarea" rows="5"
                            name="description">{{ $slider->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection