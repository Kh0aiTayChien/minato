<div class="d-none d-md-block" >
    <div class="d-flex justify-content-center align-items-center"
         style="background: rgba(19, 51, 81, 1);padding-top: 12.5vh">
        <div id="section-1-carousel" class="carousel slide w-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="1" class=""
                        aria-label="Slide 2" aria-current="true"></button>
                <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="2" class=""
                        aria-label="Slide 3" aria-current="true"></button>
                <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="3" class=""
                        aria-label="Slide 4" aria-current="true"></button>
                <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="4" class=""
                        aria-label="Slide 5" aria-current="true"></button>
            </div>
            <div class="carousel-inner">
                @foreach($images_english_pc as $key => $image)
                    <div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
                        <img src="{{$image->image_url}}" class="img-slide img-fluid" alt="img-slide" data-url="{{$image->url}}">
                    </div>
                @endforeach
{{--                <div class="carousel-item active">--}}
{{--                    <a href="#footer"><img src="{{asset('images/homepage/section-1/eng/P11.jpg')}}" class="img-slide img-fluid normal-screen"--}}
{{--                         alt="img-slide"></a>--}}
{{--                    <a href="#footer"><img src="{{asset('images/homepage/section-1/eng/L11.jpg')}}" class="img-slide img-fluid "--}}
{{--                         alt="img-slide"></a>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <a href="#footer"><img src="{{asset('images/homepage/section-1/eng/P22.jpg')}}" class="img-slide img-fluid normal-screen"--}}
{{--                         alt="img-slide"></a>--}}
{{--                    <a href="#footer"><img src="{{asset('images/homepage/section-1/eng/L22.jpg')}}" class=" img-slide img-fluid "--}}
{{--                         alt="img-slide"></a>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <a href="#footer"><img src="{{asset('images/homepage/section-1/eng/P33.jpg')}}" class="img-slide img-fluid normal-screen"--}}
{{--                         alt="img-slide"></a>--}}
{{--                    <a href="#footer"><img src="{{asset('images/homepage/section-1/eng/L33.jpg')}}" class="img-slide img-fluid "--}}
{{--                         alt="img-slide"></a>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                        <video class="embed-responsive-item img-fluid w-100" style="" autoplay muted loop>--}}
{{--                            <source src="{{asset('images/homepage/section-1/video.mp4')}}" type="video/mp4">--}}
{{--                            Your browser does not support the video tag.--}}
{{--                        </video>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="carousel-item">
                    <div class="plyr__video-embed js-player ">
                        <video controls  autoplay muted  class="embed-responsive-item img-fluid w-100">
                            <source src="{{ asset('images/homepage/section-1/video.mp4') }}" type="video/mp4" class="">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="plyr__video-embed" id="player">
                        <iframe
                            src="https://www.youtube.com/embed/q9jUHH95nds?si=hzfpUjUtechRnZDT"
                            allowfullscreen
                            allow="autoplay"
                        ></iframe>
                    </div>
                </div>
        </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#section-1-carousel"
                    data-bs-slide="prev">
                <img src="{{asset('images/button/left.png')}}" alt="Previous" class="button-shake img-carousel-arrow">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#section-1-carousel"
                    data-bs-slide="next">
                <img src="{{asset('images/button/right.png')}}" alt="Next" class="button-shake img-carousel-arrow">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


<div class="d-block d-md-none" style="">
    <div class="section-1 d-flex justify-content-center align-items-center" style="height: 092vh">
        <div id="section-m1-carousel" class="carousel slide w-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#section-m1-carousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#section-m1-carousel" data-bs-slide-to="1" class=""
                        aria-label="Slide 2" aria-current="true"></button>
                <button type="button" data-bs-target="#section-m1-carousel" data-bs-slide-to="2" class=""
                        aria-label="Slide 3" aria-current="true"></button>
            </div>
            <div class="carousel-inner">
                @foreach($images_english_mobile as $key => $image)
                    <div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
                        <img src="{{$image->image_url}}" class="img-slide" alt="img-slide" data-url="{{$image->url}}" style="height: 092vh">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#section-m1-carousel"
                    data-bs-slide="prev">
                <img src="{{asset('images/button/left.png')}}" alt="Previous" class="button-shake img-carousel-arrow">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#section-m1-carousel"
                    data-bs-slide="next">
                <img src="{{asset('images/button/right.png')}}" alt="Next" class="button-shake img-carousel-arrow">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<style>
    @media screen and (min-aspect-ratio: 1366/600) {
        .normal-screen {
            display: block;
        }

        .long-screen {
            display: none;
        }
    }

    @media screen and (max-aspect-ratio: 1366/600) {
        .normal-screen {
            display: none;
        }

        .long-screen {
            display: block;
        }
    }

</style>

