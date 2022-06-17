@extends('admin.masterTemplate')
@section('menu-name')
PAYMENT
@endsection
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">PAYMENT</h5>
                </div><!-- /.col -->
                <div class="col-sm-6 ">
                    <a href="{{ route('list-payment') }}" class="btn btn-sm btn-info float-right"><i class="fa fa-list-alt"></i> All Payments</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr class="style18">
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <form class="form-horizontal" method="post" action="{{ route('payment-store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label"> Date</label>
                                    <div class="col-sm-3">
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input required="" type="text" name="date" class="form-control datetimepicker-input" placeholder="mm/dd/YYYY" data-target="#reservationdate">
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputName" class="col-sm-2 col-form-label ">For</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="type">
                                            <option value="" selected="" disabled="">Payment For</option>
                                            <option value="Joining" >Joining</option>
                                            <option value="Renew" >Renew</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label"> Method</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="payment_type">
                                            <option value="" selected="" disabled="">Select Method</option>
                                            <option value="Bkash" >Bkash</option>
                                            <option value="UCash" >UCash</option>
                                            <option value="Nagad" >Nagad</option>
                                        </select>
                                    </div>

                                    <label for="inputName" class="col-sm-2 col-form-label">From Number</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="from_number" value="" class="form-control" id="" placeholder="From Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">To Number</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="to_number" value="" class="form-control" id="" placeholder="To Number">
                                    </div>
                                    <label for="inputName" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="amount" value="" class="form-control" id="" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">TrnxId</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="trnxid" value="" class="form-control" id="" placeholder="Transaction ID">
                                    </div>
                                    <label for="inputName" class="col-sm-2 col-form-label">Note</label>
                                    <div class="col-sm-3">
                                        <textarea type="text" rows="1" name="note" value="" class="form-control" id="" placeholder="Type Your Note"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-info" style="width:185px">Payment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

