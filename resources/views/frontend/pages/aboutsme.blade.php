@extends('frontend.masterTemp')
@section('fmenuname')
    About
@endsection

@section('front-main-content')
    <div class="content-wrapper">
        <div class="wrapper light-wrapper">
            <div class="space20"></div>
            <div class="space20"></div>

            <div class="container inner pt-60">
                <div class="boxed">
                    <div class="bg-white shadow rounded">
                        <div class="image-block-wrapper">

                            {{-- <div class="image-block col-lg-6">

                                <div class="image-block-bg bg-image">
                                    <img width="100%" src="{{ asset('./aboutmes/' . $aboutme->aboutppageimage) }}" alt="">
                                </div>
                            </div> --}}
                            <!--/.image-block -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="box d-flex">
                                            <div class="align-self-center">
                                                <h2 data-aos="fade-up" style="color: Green">About Heshakhal Bazar High School</h2>
                                                {{-- <h5 data-aos="fade-down " style="color:rgb(24, 138, 138)">
                                                    {{ $aboutme->title }}</h5> --}}
                                                {!! $aboutme->details !!}

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
    </div>
@endsection
