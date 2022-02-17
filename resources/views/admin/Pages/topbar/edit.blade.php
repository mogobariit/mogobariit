@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">

                <a href=" {{ route('topbar.index') }} " class="btn btn-info">Topbar</a>
            </div>
            <div class="card-body">
                @if (Session()->has('success'))
                <script>
                swal("Seccess", "{{ Session()->get('success') }}", "success")
                </script>
                @endif
                <form action="{{route('topbar.update',[$topbar->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Location</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('logo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="location" value="{{$topbar->location}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Phone</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('logo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="phone" value="{{$topbar->phone}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefaultUsername" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('logo') validation-required @enderror"
                                id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                                name="email" value="{{$topbar->email}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
