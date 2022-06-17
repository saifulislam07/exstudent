@extends('frontend.masterTemp')
@section('fmenuname')
Story
@endsection

<style>
   img {
   max-width: 100%;
   }
</style>
@section('front-main-content')

<div class="content-wrapper">
   <div class="wrapper light-wrapper">
      <div class="container inner pt-60">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
               <div class="space20"></div>
               <div class="space20"></div>
               <div class="space20"></div>
               <div class="card">
                  <div class="card-header bg-info" style="color : white">
                     Registred Mambers
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                     <table class="table table-striped table-bordered table-condensed "  style="width:100%" >
                        <thead class="bg-info" style="color : white">
                           <tr>
                              <td>SL</td>
                              <td>Name</td>
                              <td>SSC Year</td>
                              <td>T-Shirt Size</td>
                              <td>Status</td>
                           </tr>
                        </thead>
                        @php
                        $i=1; 
                        @endphp
                        <tbody>
                           @foreach ($allmember as $item)
                           <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->year }}</td>
                              <td>{{ $item->size }}</td>
                              <td><?php if($item->status == 1){ echo '<b  style="color :green">Success</b>';}else{ echo 'unpaid'; }?></td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.row -->
      </div>
      <!-- /.container -->
   </div>
</div>


@endsection