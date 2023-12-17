<div class="section-7">

    <div class="d-flex align-content-center justify-content-center icielbegum yellow-light-color mb-4 d-none d-md-flex"
         style="font-size: 2.66vw">
        {{__('homepage/section7.news')}}
    </div>

    <div class="d-flex align-content-center justify-content-center icielbegum yellow-light-color mb-4 pt-3 d-md-none"
         style="font-size: 32px">
        {{__('homepage/section7.news')}}
    </div>

    <div class="slick-carousel position-relative " >
        <button class="custom-prev-arrow-9 " aria-label="Previous">
            <img src="{{asset('images/button/left.png')}}" alt="Previous" class=" button-shake"/>
        </button>
        <button class="custom-next-arrow-9 " aria-label="Next">
            <img src="{{asset('images/button/right.png')}}" alt="Next" class=" button-shake"/>
        </button>

        <div class="carousel-sec-9 " >
            @foreach($articles as $article)
                <div class="d-flex justify-content-center">
                    <a href="{{route('news.show',['slug' => $article->slug])}}"
                       style="text-decoration: unset; color: unset">
                        {{--                        <a href="" style="text-decoration: unset; color: unset">--}}
                        <div class="card shadow-effect me-1 bg-transparent-black"
                             style="width:30rem; height: 100% ">
                            <img class="card-img-top img-fluid" style="height: 15rem; object-fit: cover"
                                 src="{{$article->image}}"
                                 {{--                            <img class="card-img-top  img-fluid" src="{{asset('images/homepage/section-7/eg.png')}}"--}}
                                 alt="Card image">
                            <div class="card-body">
                                {{--                                <p class="height-text-card green-text font-size-custom"><strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>--}}
                                {{--                                <p class="card-text " style="height: 6rem">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 70)) }}</p>--}}
                                <p class="height-text-card cabin-medium text-white"
                                   style="font-size: 15px; letter-spacing: 2px">
                                    <strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>

                                <div class="d-flex align-content-center justify-content-start cabin-medium mt-5 mb-4"
                                     style="font-size: 13px">
                                    <a href="{{route('news.show',['slug' => $article->slug])}}"
                                       class="yellow-light-color" style="text-decoration: unset">{{ __('homepage/section7.detail') }}</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center pb-5" >
        <div class="btn-content-sec5-hp ">
            <a href="{{route('news.index')}}"
               class="double-border px-5 btn-sec2-hp-pc mulish-black space-21-btn d-none d-md-block" style="font-size: 0.8vw;">
                {{ __('homepage/section7.btn') }}
            </a>

            <a href="{{route('news.index')}}" class="double-border px-4 py-1 btn-sec2-hp-mb mulish-black space-15 d-block d-md-none">
                {{ __('homepage/section7.btn') }}
            </a>
        </div>
    </div>
</div>
<style>
    .section-7 {
        background-image: url("/images/footer/background-footer.png");
        background-size: cover;
        padding: 3% 5% 1% 5%;
    }
</style>
<style>
    .section-7 {
        /*height: 100vh;*/
    }

    .bg-transparent-black {
        background-color: rgba(0, 0, 0, 0.27); /* Độ trong suốt: 0.5 (từ 0 đến 1) */
    }


    .height-img-card {
        object-fit: cover;
        width: 404px;
    }

    .height-text-card {
        height: 4rem;
    }

    .carousel-sec-9 {
        width: 100%;
        margin: 0px auto;
    }

    .section-9.slick-slide {
        margin: 10px;
    }

    .img-sec9-test {
        width: 30vw;
    }

    .img-sec9-test-mb {
        width: 90vw;
    }

    .section-9.slick-slide img {
        width: 90%;
    }

    .border-up {
        border-radius: 22px 22px 0 0;
    }

    .slick-dots li button:before {
        font-size: 20px;
        color: white;
    }

    .slick-slide:not(.slick-active) {
        opacity: 0.5;
    }

    .slick-slide.slick-active {

    }

    .custom-prev-arrow-9,
    .custom-next-arrow-9 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-9 {
        left: 10px;
    }

    .custom-next-arrow-9 {
        right: 10px;
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 1rem;
    }

    .section-9.slick-dots li {
        margin: 0 5px;
    }

    .section-9.slick-dots button {
        background-color: #fff; /* Màu nền trắng cho dot không active */
        border: 2px solid #59843d; /* Viền xanh cho dot không active */
        color: transparent; /* Màu chữ xanh cho dot không active */
        padding: 5px;
        width: 12px; /* Đường kính của dot */
        height: 12px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }

    .section-9.slick-dots .slick-active button {
        background-color: #59843d; /* Màu nền xanh cho dot active */
        border-color: #59843d; /* Viền xanh cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }

    .btn-long {
        width: 150px;
    }

    .header-sec9-mb-1 {
        font-size: 22px;
        font-family: Montserrat-Regular, sans-serif;
        color: #F79420;
        line-height: 0px;
        padding-top: 30px;
    }

    .header-sec9-mb-2 {
        font-size: 27px;
        font-family: Montserrat-SemiBold, sans-serif;
        color: #59843d;
    }

    @media screen and (max-width: 1200px) {
        .img-sec9-test {
            width: 40vw;
        }
    }
    .y-mobile{

    }
    @media only screen and (max-width: 800px) {
        .y-mobile{
            transform: translateY(-10%);
        }

        .custom-prev-arrow-9 {
            left: -1px;
            position: absolute;
            top: 40%;
            /*scale: 50%;*/
            opacity: 50%;
        }

        .custom-next-arrow-9 {
            right: -1px;
            position: absolute;
            top: 40%;
            /*scale: 50%;*/
            opacity: 50%;
        }

        .space_sec9 {
            display: none;
        }

        .height-text-card {
            height: 3.5rem;
        }

        .height-img-card {
            object-fit: cover;
            width: 404px;
            text-align: center;
        }
    }

</style>
<script>
    $(document).ready(function () {
        $('.carousel-sec-9').slick({
            infinite: true,
            // variableWidth: true,
            speed: 900,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            prevArrow: $('.custom-prev-arrow-9'),
            nextArrow: $('.custom-next-arrow-9'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
