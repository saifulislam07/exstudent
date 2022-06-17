   <footer class="dark-wrapper inverse-text">
       @php
           $aboutmes = \App\Models\Aboutme::first();

       @endphp

       <div class="container inner pt-60 pb-30 text-center">
           <div class="row">
               <div class="col-md-10 offset-md-1">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="widget">
                               <h3 class="widget-title">Location</h3>
                               <address class="mb-0"> Heshakhal Bazar, Nangalkot, Cumilla
                               </address>
                           </div>
                           <!-- /.widget -->
                       </div>
                       <!-- /column -->
                       <div class="col-md-4">
                           <div class="widget">
                               <h3 class="widget-title">Follow</h3>
                               <ul class="social social-mute social-s">


                                   <li><a target="_blank" href="{{ $socialMedia->facebook }}"><i
                                               class="fa fa-facebook"></i></a></li>
                                   <li><a target="_blank" href="{{ $socialMedia->instagram }}"><i
                                               class="fa fa-instagram"></i></a></li>
                                   <li><a target="_blank" href="{{ $socialMedia->twitter }}"><i
                                               class="fa fa-twitter"></i></a></li>
                                   <li><a target="_blank" href="{{ $socialMedia->linkedin }}"><i
                                               class="fa fa-linkedin"></i></a></li>

                               </ul>
                           </div>
                           <!-- /.widget -->
                       </div>
                       <!-- /column -->
                       <div class="col-md-4">
                           <div class="widget">
                               <h3 class="widget-title">Contact</h3>
                               <a style="color: white" href="mailto:{{ $aboutmes->email }}"
                                   class="nocolor">{{ $aboutmes->email }}</a> <br />
                               <a style="color: red"
                                   href="tel:{{ $aboutmes->contact }}">{{ $aboutmes->contact }}</a>
                           </div>
                           <!-- /.widget -->
                       </div>
                       <!-- /column -->
                   </div>
                   <!-- /.row -->
               </div>
               <!-- /column -->
           </div>
           <!-- /.row -->
           <div class="space30"></div>
           <p class="text-center">© 2022 Saiful Islam. All rights reserved. - Developed by <a
                   style="color: rgb(17, 108, 212)" target="_blank" href="https://nirapodit.com/">NIRAPOD IT</a></p>
       </div>
       <!-- /.container -->
   </footer>
