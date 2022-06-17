@extends('admin.masterTemplate')
@section('menu-name')
    All Member
@endsection
@section('main-content')
    <style>
        .tablestyle3 {
            margin: 0;
            padding: 0;
            line-height: 0;
            font-size: 10px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">All Member</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('addreunionregistration') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> ADD NEW</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Registred</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Size</th>
                                            <th>Status</th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($allmember as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->year }}</td>
                                                <td>{{ $value->size }}</td>
                                                <td><?php if ($value->status == 1) {
                                                    echo 'Success';
                                                } ?></td>
                                                <td>
                                                    <a class="btn btn-xs btn-warning"
                                                        onclick="getData('<?php echo $value->id; ?>','<?php echo $value->name; ?>', '<?php echo $value->year; ?>', '<?php echo $value->size; ?>')">
                                                        <i class="fas fa-edit" data-toggle="modal" data-target="#myModal">
                                                        </i>
                                                    </a>
                                                    <a href="" class="btn btn-xs btn-danger"><i
                                                            class="fas fa-trash-alt"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            <div class="col-sm-12">
                                                <h4>Update data</h4>
                                            </div>
                                            <hr>
                                            <form action="{{ route('memberdataedit') }}" method="post">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-12 mb-3">
                                                        <label>Name :</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Full Name" id="name" value="">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label>Year :</label>
                                                        <input type="text" name="year" class="form-control"
                                                            placeholder="SSC year" id="year" value="">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label>Size :</label>
                                                        <input type="text" name="size" class="form-control"
                                                            placeholder="Polo shirt size" id="size" value="">
                                                        <input type="hidden" name="oldid" id="updateId" />
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success">SAVE</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <script>
                function getData(id, name, year, size) {
                    $("#updateId").val(id);
                    $("#name").val(name);
                    $("#year").val(year);
                    $("#size").val(size);
                }
            </script>
        </section>
    </div>
@endsection
