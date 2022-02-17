@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">

                <a href=" {{ route('slider.index') }} " class="btn btn-info"> Sliders</a>
            </div>
            <div class="card-body">

                @if (Session()->has('success'))
                <script>
                swal("Seccess", "{{ Session()->get('success') }}", "success")
                </script>
                @endif
                <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('logo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Slide Imgage</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('logo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="slide_img">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="" placeholder="Description" rows="5" name="description"
                            id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection
