@extends('admin.masterTemplate')

@section('menu-name')
ALL GALLERY IMAGES
@endsection
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">ALL GALLERY IMAGES</h5>
                </div><!-- /.col -->
                <div class="col-sm-6 ">
                    <a href="{{ route('gallery') }}" class="btn btn-sm btn-info float-right"><i class="fa fa-plus-square"></i> Add Images</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr class="style18">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-12">    
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h3 class="card-title"> <i class="fa fa-users"></i> ALL GALLERY IMAGES</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Create</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($galleriImages as $key => $value)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td><img class="profile-user-img img-fluid " src="{{asset('./uploads/gallery/' . $value->images)}}"></td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            @if($value->status == 1)
                                            <button style="width: 50px" class="btn btn-success btn-xs">Active</button>
                                            @elseif($value->status == 0) 
                                            <button style="color: white" class="btn btn-warning btn-xs">Inactive</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Are you sure you want to Delete This Record ?')" href="delete-Image/{{ $value->id }} " class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
<!-- Content Wrapper. Contains page content -->
