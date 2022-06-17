@extends('frontend.masterTemp')
@section('fmenuname')
Notice
@endsection
@section('front-main-content')
<div class="content-wrapper">
   <div class="wrapper light-wrapper">
      <div class="container inner">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <h2 class="section-title mb-40 text-center">All Notice</h2>
               <div class="row">
                  <div class="col-4">
                     <div class="list-group shadow" id="list-tab" role="tablist"> 
                        @foreach ($noticelist as $item)
                        @php
                        $string = str_replace(' ', '', $item->title);
                        @endphp
                        <a class="list-group-item list-group-item-action <?php if($lastid->id == $item->id){ echo "active";}?>" id=".{{ $string }}" data-toggle="list" href="#{{ $string }}" role="tab">{{ $item->title }}</a>
                        @endforeach
                        {{-- <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">Home</a> --}}
                        {{-- <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">Profile</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Messages</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">Settings</a>  --}}
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="tab-content" id="nav-tabContent">
                        @foreach ($noticelist as $item2)
                        @php
                        $string2 = str_replace(' ', '', $item2->title);
                        @endphp
                        <div class="tab-pane fade show <?php if($lastid->id == $item2->id){ echo "active";}?> " id="<?php echo $string2; ?>" role="tabpanel">
                           <p> {!! $item2->details !!}</p>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </div>
</div>
@endsection