<div class="section-5 pt-5 pb-4 custom-padding-sec-5 d-none d-md-block pc-5">
    <div class="d-flex align-content-center justify-content-center pt-4 ">
        <div class="row">
            <div class="col-xs-12 col-md-7 ">
                <div class="mulish-extrabold text-white mb-5 d-none d-md-block" style="font-size: 21px; letter-spacing: 0.35rem; line-height: 0.55"> IMMERSE YOURSELF </div>
                <div class="mulish-extrabold text-white mb-1 d-md-none text-center" style="font-size: 15px; letter-spacing: 0.35rem;"> IMMERSE YOURSELF </div>
                <div class="NotoSerifJP   yellow-light-color " style="font-size: 2.66vw; line-height: 0.55"> 充実のアメニティ</div>
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
                <div class=" d-md-flex align-content-center justify-content-end d-md-none" style="width: 100%; text-align: justify; letter-spacing: 1px">
                    <div class="cabin-medium " style="font-size: 13px;   user-select: none;"> The Minato Residence mang đến một thành phố
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
    <div class="slick-carousel position-relative " >
        <button class="custom-prev-arrow-pc " aria-label="Previous">
            <img src="{{asset('images/button/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-pc" aria-label="Next">
            <img src="{{asset('images/button/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-pcs pb-5">
            <div class="mg02" style="">
                <img src="{{asset('images/utility/ja/11.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/12.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/13.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/14.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/15.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/16.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/17.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/ja/18.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
        </div>
    </div>
    <style>
        .mg02{
            margin-left: 0.2%
        }
        .y-mobile{

        }
        @media (max-width: 800px) {
            .mg02{
                margin-left: 0
            }
            .custom-padding-sec-5{
                padding: 5% 5% 0 5%!important;
            }
            .y-mobile{
                transform: translateY(-10%);
            }
        }


    </style>


    <script>
        $(document).ready(function () {
            $('.carousel-pcs').slick({
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                prevArrow: $('.custom-prev-arrow-pc'),
                nextArrow: $('.custom-next-arrow-pc'),
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

        $('.carousel-pcs').on('init', function (event, slick) {
            // Di chuyển dots vào div tùy chỉnh
            $('.pc-5 .slick-dots').appendTo('.custom-dots');
        });
    </script>


</div>
<div class="mobile-s5 section-5 pt-5 pb-4 custom-padding-sec-5 d-md-none" style="overflow: hidden">
    <div class="d-flex align-content-center justify-content-center pt-4 ">
        <div class="row">
            <div class="col-xs-12 col-md-7 ">
                <div class="mulish-extrabold text-white mb-5 d-none d-md-block" style="font-size: 21px; letter-spacing: 0.35rem; line-height: 0.55"> IMMERSE YOURSELF </div>
                <div class="mulish-extrabold text-white mb-1 d-md-none text-center" style="font-size: 15px; letter-spacing: 0.35rem;"> IMMERSE YOURSELF </div>
                <div class="NotoSerifJP yellow-light-color d-md-none text-center" style="font-size: 28px; line-height: 1.25"> 充実のアメニティ </div>
            </div>

        </div>
    </div>
    <div class="slick-carousel position-relative y-mobile" >
        <button class="custom-prev-arrow-course " aria-label="Previous">
            <img src="{{asset('images/button/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-course" aria-label="Next">
            <img src="{{asset('images/button/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-courses">
            <div class="mg02" style="">
                <img src="{{asset('images/utility/1.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> SAKURA PARK</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> SAKURA PARK</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%"> Cherry Blossoms in the City of Red Flamboyant </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%"> Cherry Blossoms in the City of Red Flamboyant </div>
                <img src="{{asset('images/utility/doc1.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white" style="text-align: justify; font-size: 13px">
                    約3000m2の広大な敷地には、桜が咲き誇る中央広場、緑豊かな木々に囲まれた木陰の遊歩道、穏やかな自然環境を備えています。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/2.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> OUTDOOR CHILDREN'S PLAYGROUND </div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> OUTDOOR CHILDREN'S PLAYGROUND </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%"> A Colorful Nursery Nurturing Young Seeds </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%"> A Colorful Nursery Nurturing Young Seeds  </div>
                <img src="{{asset('images/utility/doc2.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white" style="text-align: justify; font-size: 13px">
                    豊かな芝生が生い茂る自然の生態系に囲まれた、爽やかでリラックスした雰囲気のエリア。このエリアは、子供たちが広大で多様な自然と密接につながり、開放的で広々とした環境の中で視野を広げ、国際色豊かなコミュニティと関わる空間を提供します。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/3.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> KID ROOM</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> KID ROOM </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Overflowing with joy and happiness</div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%"> Overflowing with joy and happiness  </div>
                <img src="{{asset('images/utility/doc3.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white" style="text-align: justify; font-size: 13px;">
                    屋内の遊び場として、安全性に考慮されたレイアウト・設備となっており、ご両親が安心して利用できる空間づくりをしています。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/4.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> PARTY ROOM</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> PARTY ROOM </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Elegant, Classy, Multifunctional</div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Elegant, Classy, Multifunctional </div>
                <img src="{{asset('images/utility/doc4.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    モダンなデザインで企画されており、居住者同士でのパーティーや、ヨガやエアロビクスなどのフィットネスクラスなど多種多様な用途での利用が可能です。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/5.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> MAIN LOBBY</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> MAIN LOBBY</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Luxurious Reception Space of Distinction </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Luxurious Reception Space of Distinction</div>
                <img src="{{asset('images/utility/doc6.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    シンプルさとラグジュアリーなアメニティが融合し、いつ訪れても心地よい温もりを感じられます。サービスの質からスタッフの対応まで、すべてが国際的な5つ星の基準を満たしています。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/6.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> GYM</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> GYM</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Energize Your Life with a Modern Gym </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Energize Your Life with a Modern Gym </div>
                <img src="{{asset('images/utility/doc6.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    ジムには、最新のトレンドに対応した一流のエクササイズ器具が充実しており、居住者の皆様に完璧な運動の機会を提供します。ジムの開放的なデザインからは、自然豊かな景観を見渡すことができ、運動不足の解消やリラクゼーションのひとときに最適です。居住者の皆様にとって、一日の疲れを癒し、ストレスを解消し、活力を高める理想的な空間となっています。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/Mask group.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> CAFE ROOFTOP</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> CAFE ROOFTOP</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Rooftop Cafe with a Panoramic View of Hai Phong City and Lach Tray River</div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Rooftop Cafe with a Panoramic View of Hai Phong City and Lach Tray River</div>
                <img src="{{asset('images/utility/doc7.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    ゆったりとした時間をお過ごしいただくために、屋上には開放感あふれる眺望をお楽しみいただけるルーフトップカフェをご用意しております。
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/Mask group (1).png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> OUTDOOR SWIMMING POOL</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> OUTDOOR SWIMMING POOL</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Immerse Yourself in Cool, Refreshing Water</div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Immerse Yourself in Cool, Refreshing Water</div>
                <img src="{{asset('images/utility/doc8.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px; ">
                    この開放感に浸りながら、心身ともにゆったりとくつろぐことができます。居住者の皆様が毎日心地よい寛ぎを享受できるよう、上質で万全の体制を整えています。
                </div>
            </div>
        </div>
    </div>
    <style>
        .mg02{
            margin-left: 0.2%
        }
        .y-mobile{

        }
        @media (max-width: 800px) {
            .mg02{
                margin-left: 0
            }
            .custom-padding-sec-5{
                padding: 5% 5% 0 5%!important;
            }
            .y-mobile{
                transform: translateY(5%);
            }
        }


    </style>


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
    .custom-padding-sec-5 {
        padding: 5% 5% 5% 8%;
    }

    @media (min-width: 800px) {
        .section-5 {
            background-image: url("/images/footer/background-footer.png");
            background-size: cover;
        }
        .custom-prev-arrow-course,
        .custom-next-arrow-course {
            top: 33% !important;
        }
    }
    @media (max-width: 800px) {
        .section-5 {
            background-image: url("/images/utility/bg-1.png");
            background-size: cover;
        }
        .custom-prev-arrow-course,
        .custom-next-arrow-course {
            top: 20% !important;
        }
    }

    .carousel-courses {
        width: 100%;
        margin: 0px auto;
    }

    .custom-prev-arrow-course,
    .custom-next-arrow-course {
        position: absolute;
        top: 20%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }
    .custom-prev-arrow-pc,
    .custom-next-arrow-pc {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-course {
        left: -5%;
    }

    .custom-next-arrow-course {
        right:-5%;
    }
    .custom-prev-arrow-pc {
        left: -5%;
    }

    .custom-next-arrow-pc {
        right:-5%;
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
