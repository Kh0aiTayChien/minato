<div class="section-5 pb-4 custom-padding-header-sec-5 ">
    <div class="d-flex align-content-center justify-content-center pt-4 ">
        <div class="row">
            <div class="col-xs-12 col-md-7 ">
                <div class="NotoSerifJP   text-white mb-5 d-none d-md-block" style="font-size: 21px; letter-spacing: 0.35rem; line-height: 0.55"> 公共施設</div>
                <div class="NotoSerifJP   text-white mb-1 d-md-none text-center" style="font-size: 15px; letter-spacing: 0.35rem;"> 自然を享受する暮らし </div>
                <div class="NotoSerifJP   yellow-light-color d-none d-md-block" style="font-size: 2.66vw; line-height: 0.55"> 充実のアメニティ</div>
                <div class="NotoSerifJP   yellow-light-color d-md-none text-center mt-3 mb-3" style="font-size: 29px; line-height: 0.55"> 充実のアメニティ</div>
            </div>
            <div class="col-xs-12 col-md-5 text-white">
                <div class=" d-md-flex align-content-start justify-content-end d-none d-md-block" style="width: 100%; text-align: justify; letter-spacing: 1px">
                    <div class="cabin-medium " style="font-size: 15px; color: transparent;   user-select: none;"> The Minato Residence mang đến một thành phố
                        xanh,

                        hiện đại, và đẳng cấp, nơi cư dân thỏa sức
                        trải
                        nghiệm các

                        tiện ích đẳng cấp chuẩn Nhật và môi trường
                        thân
                        thiện
                    </div>
                </div>
                <div class="ms-5 ps-5 me-5 pe-5 d-flex align-content-center justify-content-end" style="width: 100%; margin-top: 10%; transform: translateY(-65%)">
                    <div class="custom-dots"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="slick-carousel position-relative mt-4">
        <button class="custom-prev-arrow-course " aria-label="Previous">
            <img src="{{asset('images/button/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-course" aria-label="Next">
            <img src="{{asset('images/button/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-courses y-mobile" style="padding-bottom: 22px">

            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/congviensakura.png')}}" alt=""
                         style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/congviensakura.png')}}" alt=""
                         style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/congviensakura.png')}}" alt=""
                         style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/congviensakura.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide1') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-5 text-center"> {{ __('homepage/section5.subDocumentSlide1') }}</p>
                </div>
            </div>


            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/37.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/37.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/37.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/37.png')}}" alt="" style=""
                     class="d-block d-md-none  img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide2') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-4 text-center"> {{ __('homepage/section5.subDocumentSlide2') }}</p>
                </div>
            </div>

            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/39.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/39.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/39.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/38.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide3') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-5 text-center"> {{ __('homepage/section5.subDocumentSlide3') }}</p>
                </div>
            </div>

            <div class="mg02">

                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/40.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/40.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/40.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/39.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide4') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-3 text-center"> {{ __('homepage/section5.subDocumentSlide4') }}</p>
                </div>
            </div>

            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/42.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/42.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/42.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/40.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide5') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-3 text-center"> {{ __('homepage/section5.subDocumentSlide5') }}</p>
                </div>
            </div>

            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/38.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/38.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/38.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/41.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px">{{ __('homepage/section5.subTitleSlide6') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-4 text-center"> {{ __('homepage/section5.subDocumentSlide6') }}</p>
                </div>
            </div>


            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/41.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/41.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/41.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/42.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide7') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-3 text-center"> {{ __('homepage/section5.subDocumentSlide7') }}</p>
                </div>
            </div>


            <div class="mg02">
                @if(app()->getLocale() === 'vi')
                    <img src="{{asset('images/homepage/section-5/43.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'en')
                    <img src="{{asset('images/homepage/section-5/eng/43.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @elseif(app()->getLocale() === 'ja')
                    <img src="{{asset('images/homepage/section-5/ja/43.png')}}" alt="" style="margin-right: 0.2%"
                         class="d-none d-md-block img-fluid">
                @endif
                <img src="{{asset('images/homepage/section-5m/43.png')}}" alt="" style=""
                     class="d-block d-md-none img-fluid">
                <div class="text-white mulish-extrabold text-center d-block d-md-none mt-3">
                    <p style="font-size: 13px"> {{ __('homepage/section5.subTitleSlide8') }}</p>
                    <p style="font-size: 13px; text-align: justify"
                       class="cabin-medium px-5 text-center"> {{ __('homepage/section5.subDocumentSlide8') }}</p>
                </div>


            </div>
        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center pb-2">
        <div class="btn-content-sec5-hp ">
            <a href="{{route('utility.index')}}"
               class="double-border px-5 space-21-btn btn-sec2-hp-pc mulish-black d-none d-md-block">
                {{ __('homepage/section5.btn') }}
            </a>

            <a href="{{route('utility.index')}}"
               class="double-border px-4 py-1 btn-sec2-hp-mb mulish-black d-block d-md-none"
               style="transform: translateY(-90%)">
                {{ __('homepage/section5.btn') }}
            </a>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('.carousel-courses').slick({
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                prevArrow: $('.custom-prev-arrow-course'),
                nextArrow: $('.custom-next-arrow-course'),
                variableWidth: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false,
                        }
                    }
                ]
            });
        });

        $('.carousel-courses').on('init', function (event, slick) {
            // Di chuyển dots vào div tùy chỉnh
            $('.slick-dots').appendTo('.custom-dots');
        });
    </script>


</div>
<style>
    .mg02 {
        margin-left: 0.2%
    }

    .custom-padding-header-sec-5 {
        padding: 5% 5% !important;
    }

    .y-mobile {

    }

    @media (max-width: 800px) {
        .mg02 {
            margin-left: 0
        }

        .y-mobile {
            transform: translateY(-10%);
        }
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 2rem;
        margin-top: 1rem !important;
    }

    .carousel-indicators [data-bs-target] {
        background-color: transparent; /* Màu nền trắng cho dot không active */
        border: 2px solid #fff; /* Viền trắng cho dot không active */
        color: white; /* Màu chữ trắng cho dot không active */
        padding: 3px;
        width: 2px; /* Đường kính của dot */
        height: 2px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }

    .carousel-indicators .active {
        background-color: #fff; /* Màu nền trắng cho dot active */
        border-color: #fff; /* Viền trắng cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }

    @media only screen and (min-width: 800px) {
        .pc-padding {
            padding-top: 3%;
        }
    }

    @media only screen and (max-width: 800px) {
        .custom-padding-header-sec-5 {
            padding: 5% 0 0 0 !important;
        }

        .custom-prev-arrow-course,
        .custom-next-arrow-course {
            position: absolute;
            top: 38% !important;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
        }

        .custom-prev-arrow-course {
            left: -1% !important;
        }

        .custom-next-arrow-course {
            right: -1% !important;
        }
    }

    .custom-padding {
        padding: 5% 5% 5% 8%;
    }

    .section-5 {
        background-image: url("/images/footer/background-footer.png");
        background-size: cover;
    }

    .carousel-courses {
        width: 100%;
        margin: 0px auto;
    }

    .custom-prev-arrow-course,
    .custom-next-arrow-course {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-course {
        left: 1px% !important;
    }

    .custom-next-arrow-course {
        right: 1px !important;
    }

    .slick-dots button {
        background-color: transparent; /* Màu nền trắng cho dot không active */
        border: 1px solid #fff; /* Viền trắng cho dot không active */
        color: transparent; /* Màu chữ xanh cho dot không active */
        padding: 5px;
        width: 6px; /* Đường kính của dot */
        height: 6px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
        margin-right: 7px;
    }

    .slick-dots .slick-active button {
        background-color: #fff; /* Màu nền trắng cho dot active */
        border-color: #fff; /* Viền trắng cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }

    .slick-slide:not(.slick-active) {
        opacity: 0.5; /* Điều chỉnh độ mờ tùy ý */
        transition: opacity 0.3s ease; /* Thêm transition để làm mịn hiệu ứng */
    }

</style>
