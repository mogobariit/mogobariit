@extends('admin.layout.app')
@section('admin-content')
<div class="container-fluid">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('partner.create') }}" class="btn btn-info"> Madia Partner</a>
                </div>
                @if (Session()->has('success'))
                <script>
                swa("Seccess", "{{ Session()->get('success') }}", "success")
                </script>

                @endif
                <div class="card-body">
                    <table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline"
                        style="width: 100%;" aria-describedby="datatables-reponsive_info">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Imgage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner )
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{ $partner->id }}</td>
                                <td> {{ $partner->name }} </td>
                                <td> <img src="{{asset($partner->img)}}" alt="" width="70px" ; height="70px"> </td>

                                <td class=" d-flex">
                                    <a href="{{ route('partner.edit',[$partner->id])}}"
                                        class="btn btn-primary btn-sm mr-1"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('partner.destroy', [$partner->id])}}" method="POST">
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