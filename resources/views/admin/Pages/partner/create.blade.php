@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">

                <a href=" {{ route('partner.index') }} " class="btn btn-info"> Partner</a>
            </div>
            <div class="card-body">

                @if (Session()->has('success'))
                <script>
                swal("Seccess", "{{ Session()->get('success') }}", "success")
                </script>

                @endif
                <form action="{{route('partner.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="name">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" placeholder="Image" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection