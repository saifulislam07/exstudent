@extends('admin.masterTemplate')
@section('menu-name')
    Add Registration
    @endsection @section('main-content')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark"> Registration</h5>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title">
                                    <i class="fas fa-thumbs-up"></i> Registration Member Entry
                                </h3>
                            </div>
                            <div class="card-body">

                                <div id='container'>
                                    <form id='students' method='post' name='students'
                                        action='{{ route('storereunionregistration') }}'>
                                        @csrf
                                        <table class="table table-bordered table-hover ">
                                            <tr>
                                                <th><input class='check_all' type='checkbox' onclick="select_all()" /></th>
                                                <th>S. No</th>
                                                <th>Full Name</th>
                                                <th>Year</th>
                                                <th>Size</th>
                                            </tr>
                                            <tr>
                                                <td><input type='checkbox' class='case' /></td>
                                                <td><span id='snum'>1.</span></td>
                                                <td><input type='text' class='form-control' id='first_name'
                                                        name='first_name[]' /></td>
                                                <td><input type='text' class='form-control' id='year'
                                                        name='year[]' /></td>
                                                <td><input type='text' class='form-control' id='size'
                                                        name='size[]' /> </td>
                                            </tr>
                                        </table>
                                        <div class="form-group float-left">
                                            <button type="button" class='delete btn btn-danger'>- Delete</button>
                                            <button type="button" class='addmore btn btn-info'>+ Add More</button>
                                        </div>


                                        <p class="form-group float-left">
                                            &nbsp; <input type='submit' class='btn btn-success' name='submit'
                                                value='submit' class='but' />
                                        </p>
                                    </form>
                                </div>
                                <script>
                                    $(".delete").on('click', function() {
                                        $('.case:checkbox:checked').parents("tr").remove();
                                        $('.check_all').prop("checked", false);
                                        check();

                                    });
                                    var i = 2;
                                    $(".addmore").on('click', function() {
                                        count = $('table tr').length;
                                        var data = "<tr><td><input type='checkbox' class='case'/></td><td><span id='snum" + i + "'>" + count +
                                            ".</span></td>";
                                        data += "<td><input type='text' id='first_name" + i +
                                            "' name='first_name[]'/></td><td><input type='text' id='year" + i +
                                            "' name='year[]'/></td><td><input type='text' id='size" + i + "' name='size[]'/></td></tr>";
                                        $('table').append(data);
                                        i++;
                                    });

                                    function select_all() {
                                        $('input[class=case]:checkbox').each(function() {
                                            if ($('input[class=check_all]:checkbox:checked').length == 0) {
                                                $(this).prop("checked", false);
                                            } else {
                                                $(this).prop("checked", true);
                                            }
                                        });
                                    }

                                    function check() {
                                        obj = $('table tr').find('span');
                                        $.each(obj, function(key, value) {
                                            id = value.id;
                                            $('#' + id).html(key + 1);
                                        });
                                    }
                                </script>
                                <script>
                                    obj = $('table tr').find('span');
                                    $.each(obj, function(key, value) {
                                        id = value.id;
                                        $('#' + id).html(key + 1);
                                    });

                                    $(".delete").on('click', function() {
                                        $('.case:checkbox:checked').parents("tr").remove();
                                        $('.check_all').prop("checked", false);
                                        check();

                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    </section>
@endsection
