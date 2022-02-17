@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('topbar.create') }}" class="btn btn-info"> Create Topbar</a>
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
                                <th>location</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topbars as $topbar )
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{ $topbar->id }}</td>
                                <td> {{ $topbar->location }} </td>
                                <td> {{ $topbar->phone }} </td>
                                <td> {{ $topbar->email }} </td>
                                <td class=" d-flex">
                                    <a href="{{ route('topbar.edit', [$topbar->id])}}"
                                        class="btn btn-primary btn-sm mr-1"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('topbar.destroy', [$topbar->id])}}" method="POST">
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
