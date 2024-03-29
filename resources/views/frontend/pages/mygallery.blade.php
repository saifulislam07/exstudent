@extends('frontend.masterTemp')
@section('fmenuname')
    Gallery
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="wrapper light-wrapper">
            <div class="container inner pt-70">
                <h1 class="heading text-center"><b data-aos="zoom-in" data-aos-easing="ease-out-cubic"
                        data-aos-duration="3000" style="color:rgb(5, 66, 66)"> Photo Archive </b>
                </h1>

                {{-- <h2 data-aos="fade-down " style="color:rgb(24, 138, 138)" class="sub-heading2 text-center">
                    {{ $aboutme->title }}
                </h2> --}}
                {{-- <h1 class="divider-icon w300"><i style="color: black" class="si-photo_aperture"></i></h1> --}}
                {{-- <div class="space50"></div> --}}
                <div id="cube-grid-filter" class="cbp-filter-container text-center">
                 
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
                    @foreach ($allcategorycount as $echocat)
                        @php
                            $string = str_replace(' ', '', $echocat->catname);
                        @endphp
                        <div data-filter=".{{ $string }}" class="cbp-filter-item">{{ $echocat->catname }}
                            {{ '( ' . $echocat->total . ' )' }}</div>
                    @endforeach

                </div>
                <div class="clearfix"></div>
                <div class="space20"></div>
                <div id="cube-grid" class="cbp light-gallery">
                    @foreach ($allrecentimages as $eachimage)
                        @php
                            $imagecatid = str_replace(' ', '', $eachimage->title);
                        @endphp
                        <div class="cbp-item <?php echo $imagecatid; ?>">
                            <figure class="overlay overlay3 rounded">
                                <a href="{{ asset('./uploads/gallery/' . $eachimage->images) }}"
                                    data-sub-html="#caption1">
                                    <img src="{{ asset('./uploads/gallery/' . $eachimage->images) }}" alt="" />
                                </a>
                            </figure>
                        </div>
                    @endforeach
                </div>
                <!--/.cbp -->
            </div>
            <!-- /.container -->
        </div>

    </div>
@endsection
