@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('slider.create') }}" class="btn btn-info"> Create Slider</a>
                </div>
                @if (Session()->has('success'))
                <script>
                swal("Seccess", "{{ Session()->get('success') }}", "success")
                </script>
                @endif
                <div class="card-body">
                    <table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline"
                        style="width: 100%;" aria-describedby="datatables-reponsive_info">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Slider Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider )
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{ $slider->id }}</td>
                                <td> {{ $slider->title }} </td>
                                <td> {{ $slider->description }} </td>
                                <td> <img src="{{asset($slider->slide_img)}}" alt="" width="70px" ; height="70px"> </td>

                                <td class=" d-flex">
                                    <a href="{{ route('slider.edit', [$slider->id])}}"
                                        class="btn btn-primary btn-sm mr-1"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('slider.destroy', [$slider->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm mr-1 bntsize "
                                            onclick=" return confirm('Are You Sure To Delete')"> <i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection