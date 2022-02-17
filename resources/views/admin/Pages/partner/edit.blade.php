@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">

                <a href=" {{ route('partner.index') }} " class="btn btn-info"> Partern</a>
            </div>
            @if (Session()->has('success'))
            <script>
            swal("Seccess", "{{ Session()->get('success') }}", "success")
            </script>
            @endif
            <div class="card-body">
                <form action="{{route('partner.update',[$partner->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="name"
                            value="{{ $partner->name}}">

                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control w-75" placeholder="Image" name="img" value="">
                        <div class="w-25 justify-content-end">
                            <img src="{{asset($partner->img)}}" alt="" height="70px" width="70px">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection