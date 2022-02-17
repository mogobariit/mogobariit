@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
               
    <a href=" {{ route('logo.index') }} " class="btn btn-info"> Logo</a>
            </div>
            <div class="card-body">
                @if (Session()->has('success'))
                <script>
                    swal("Seccess", "{{ Session()->get('success') }}","success")
                </script>
                @endif
                <form action="{{route('logo.update',[$logo->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 d-flex justify-content-center">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control w-75" placeholder="Image" name="img" value="">
                        <div class="w-25 justify-content-end">
                        <img src="{{asset($logo->logo)}}" alt="" height="70px" width="70px">
                        </div>
                      
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="" placeholder="Textarea" rows="5" name="description">{{ $logo->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
  </div>
@endsection