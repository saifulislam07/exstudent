@extends('admin.masterTemplate')
@section('menu-name')
Add Notice
@endsection
@section('main-content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h5 class="m-0 text-dark"> Notice</h5>
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
            <div class="col-md-10">
               <!-- Profile Image -->
               <div class="card">
                  <div class="card-header bg-cyan">
                     <h3 class="card-title"> <i class="fas fa-thumbs-up"></i>Notice</h3>
                  </div>
                  <div class="card-body">
                     <form action="{{ route('storenotice') }}" method="POST">
                        @csrf
                        <div class="form-group ">
                           <label for="inputName" class="col-form-label">Title <span style="color: red">*</span></label>
                           <div class="col-sm-12">
                              <input type="text" name="title" value="" class="form-control" id=""
                                 placeholder="Notice Title">
                              @error('title')
                              <div style="color: red; padding: 0;">
                                 <strong>
                                 {{ $message }}
                                 </strong>
                              </div>
                              @enderror
                           </div>
                        </div>
                           <div class="form-group">
                              <label>Details <span style="color: red">*</span></label>
                              <textarea class="textarea" name="details" placeholder="Place some text here"
                                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                 @error('details')
                                 <div style="color: red; padding: 0;">
                                    <strong>
                                       {{ $message }}
                                    </strong>
                                 </div>
                                 @enderror 
                              </textarea>
                           </div>
                        <div class="form-group row">
                           <label for="inputName" class="col-sm-3 col-form-label"></label>
                           <div class="col-sm-9 ">
                              <button type="submit" class="btn btn-success">SAVE</button>
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
</section>
@endsection