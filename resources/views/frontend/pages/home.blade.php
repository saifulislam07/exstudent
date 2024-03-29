@extends('frontend.masterTemp')
@section('fmenuname')
    HOME
@endsection
@section('front-main-content')
    @include('frontend.include.slider')
    <div class="content-wrapper">
        <div class="wrapper light-wrapper">
            <div class="container inner pt-60">
                <div class="boxed">
                    <div class="bg-white shadow rounded">
                        <div class="image-block-wrapper">
{{-- 
                            <div class="image-block col-lg-6">

                                <div class="image-block-bg bg-image">
                                    <img width="100%" src="{{ asset('./aboutmes/' . $aboutme->homeimage) }}" alt="">
                                </div>
                            </div> --}}
                            <!--/.image-block -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="box d-flex">
                                            <div class="align-self-center">
                                                  <h2 data-aos="fade-up" style="color: Green">About Heshakhal Bazar High School</h2>
                                                {{-- <h5 data-aos="fade-down " style="color:rgb(24, 138, 138)">
                                                    {{ $aboutme->title }}</h5> --}}
                                                <p>
                                                     {!! Str::words($aboutme->details, 200, '<br> <a style="color :green" href="/aboutsme">Read More</a>') !!}
                                             
                                                </p>
                                                <div class="card">
                                                    <div class="card-body text-center hover">
                                                        <ul class="social social-color" data-aos="fade-up"
                                                            data-aos-easing="linear" data-aos-duration="5000">
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
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.container-fluid -->
                        </div>
                        <!--/.image-block-wrapper -->
                    </div>
                    <!-- /.bg -->
                </div>
                <!-- /.boxed -->
            </div>
            <!-- /.container -->
        </div>

        <div class="wrapper light-wrapper">
            <div class="container inner">
                <h2 class="section-title section-title-upper larger text-center">Some of Recent Photos</h2>
                {{-- <p class="lead text-center">Photography is my passion and I love to turn ideas into beautiful things.</p> --}}
                <div class="space20"></div>

                <div id="cube-grid" class="cbp light-gallery">
                    @foreach ($recentimages as $eachphoto)
                        <div class="cbp-item food">
                            <figure class="overlay overlay3 rounded">
                                <a href="{{ asset('./uploads/gallery/' . $eachphoto->images) }}"
                                    data-sub-html="#caption1">
                                    <img src="{{ asset('./uploads/gallery/' . $eachphoto->images) }}" alt="" />
                                </a>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.container -->
        </div>
    </div>
@endsection
