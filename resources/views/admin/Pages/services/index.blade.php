@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('services.create') }}" class="btn btn-info"> Create Services</a>
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
                                <th>Icon</th>
                                <th>Service Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service )
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{ $service->id }}</td>
                                <td> {!! $service->icon !!} </td>
                                <td> {{ $service->course_name}} </td>
                                <td> {{ $service->description }} </td>
                                <td class=" d-flex">
                                    <a href="{{ route('services.edit', [$service->id])}}"
                                        class="btn btn-primary btn-sm mr-1"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('services.destroy', [$service->id])}}" method="POST">
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