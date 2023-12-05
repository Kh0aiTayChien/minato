<div class="section-5 pt-4 pb-4 custom-padding">
    <div class="d-flex align-content-center justify-content-center pt-4 px-3">
        <div class="row">
            <div class="col-xs-12 col-md-7 ">
                <div class="mulish-extrabold text-white mb-5 d-none d-md-block" style="font-size: 21px; letter-spacing: 0.35rem;"> HỆ THỐNG TIỆN ÍCH</div>
                <div class="mulish-extrabold text-white mb-5 d-md-none" style="font-size: 15px; letter-spacing: 0.35rem;"> HỆ THỐNG TIỆN ÍCH</div>
                <div class="icielbegum yellow-light-color d-none d-md-block" style="font-size: 2.66vw"> SỐNG GIỮA THIÊN NHIÊN</div>
                <div class="icielbegum yellow-light-color d-none d-md-block" style="font-size: 2.66vw"> Hướng đa tầng tiện ích chuẩn Nhật</div>
                <div class="icielbegum yellow-light-color d-md-none" style="font-size: 35px"> SỐNG GIỮA THIÊN NHIÊN</div>
                <div class="icielbegum yellow-light-color d-md-none" style="font-size: 35px"> Hướng đa tầng tiện ích chuẩn Nhật</div>
            </div>
            <div class="col-xs-12 col-md-5 text-white">
                <div class=" d-md-flex align-content-start justify-content-end d-none d-md-block" style="width: 100%; text-align: justify; letter-spacing: 1px">
                    <div class="cabin-medium " style="font-size: 15px"> The Minato Residence mang đến một thành phố
                        xanh,

                        hiện đại, và đẳng cấp, nơi cư dân thỏa sức
                        trải
                        nghiệm các

                        tiện ích đẳng cấp chuẩn Nhật và môi trường
                        thân
                        thiện
                    </div>
                </div>
                <div class=" d-md-flex align-content-start justify-content-end d-md-none" style="width: 100%; text-align: justify; letter-spacing: 1px">
                    <div class="cabin-medium " style="font-size: 13px"> The Minato Residence mang đến một thành phố
                        xanh,

                        hiện đại, và đẳng cấp, nơi cư dân thỏa sức
                        trải
                        nghiệm các

                        tiện ích đẳng cấp chuẩn Nhật và môi trường
                        thân
                        thiện
                    </div>
                </div>
                <div class="ms-5 ps-5 me-5 pe-5 d-flex align-content-center justify-content-end" style="width: 100%; margin-top: 10%">
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

        <div class="carousel-courses">
            <img src="{{asset('images/homepage/section-5/congviensakura.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/37.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/38.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/39.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/40.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/41.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/42.png')}}" alt="" style="margin-right: 0.2%">
            <img src="{{asset('images/homepage/section-5/43.png')}}" alt="" style="margin-right: 0.2%">
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
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
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
    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 1rem;
    }
    .carousel-indicators [data-bs-target]{
        background-color: transparent; /* Màu nền trắng cho dot không active */
        border: 2px solid #fff; /* Viền trắng cho dot không active */
        color: white; /* Màu chữ trắng cho dot không active */
        padding: 3px;
        width: 2px; /* Đường kính của dot */
        height: 2px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }
    .carousel-indicators .active{
        background-color: #fff; /* Màu nền trắng cho dot active */
        border-color: #fff; /* Viền trắng cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
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
        left: 10px;
    }

    .custom-next-arrow-course {
        right: 10px;
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