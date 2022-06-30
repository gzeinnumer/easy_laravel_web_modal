@extends('homeV2.layouts.master')

@section('title', 'Users')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="d-flex justify-content-between ">
                                <h3 class="card-title">DataTable with default features</h3>
                                <button type="button" class="btn btn bg-gradient-primary" data-toggle="modal" data-target="#modal-xl"><i class="fas fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="dTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $index = 1;
                                    @endphp
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$index}}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>*******</td>
                                        <td>{{$d->created_at}}</td>
                                        <td>{{$d->updated_at}}</td>
                                    </tr>
                                    @php
                                    $index++;
                                    @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('user.add')

    </section>
</div>
@endsection

@section('extraJS')
<script>
    $(function() {
        let exportOptionsCustom = {
            columns: [0, 1, 2, 3, 4, 5],
            orthogonal: 'export'
        };

        $("#dTable")
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: [{
                        extend: 'copy',
                        exportOptions: exportOptionsCustom
                    },
                    {
                        extend: 'csv',
                        exportOptions: exportOptionsCustom
                    },
                    {
                        extend: 'excel',
                        exportOptions: exportOptionsCustom
                    },
                    {
                        extend: 'pdf',
                        exportOptions: exportOptionsCustom
                    },
                    {
                        extend: 'print',
                        exportOptions: exportOptionsCustom
                    },
                    "colvis"
                ],
            })
            .buttons()
            .container()
            .appendTo("#dTable_wrapper .col-md-6:eq(0)");
    });
</script>
@endsection