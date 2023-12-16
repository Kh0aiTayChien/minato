<div class="section-5 pt-5 pb-4 custom-padding-sec-5 d-none d-md-block pc-5">
    <div class="d-flex align-content-center justify-content-center pt-4 ">
        <div class="row">
            <div class="col-xs-12 col-md-7 ">
                <div class="mulish-extrabold text-white mb-5 d-none d-md-block" style="font-size: 21px; letter-spacing: 0.35rem; line-height: 0.55"> HÒA MÌNH TẬN HƯỞNG</div>
                <div class="mulish-extrabold text-white mb-1 d-md-none text-center" style="font-size: 15px; letter-spacing: 0.35rem;"> HÒA MÌNH TẬN HƯỞNG</div>
                <div class="icielbegum yellow-light-color d-none d-md-block" style="font-size: 2.66vw; line-height: 0.55"> THIÊN ĐƯỜNG TIỆN ÍCH HẠNG A</div>
                <div class="icielbegum yellow-light-color d-md-none text-center" style="font-size: 28px; line-height: 1.25"> THIÊN ĐƯỜNG TIỆN ÍCH </div>
                <div class="icielbegum yellow-light-color d-md-none text-center pb-2" style="font-size: 28px; line-height: 1.25">  HẠNG A</div>
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
                <img src="{{asset('images/utility/vi/11.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/12.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/13.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/14.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/15.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/16.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/17.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/vi/18.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid">
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
                <div class="mulish-extrabold text-white mb-5 d-none d-md-block" style="font-size: 21px; letter-spacing: 0.35rem; line-height: 0.55"> HÒA MÌNH TẬN HƯỞNG</div>
                <div class="mulish-extrabold text-white mb-1 d-md-none text-center" style="font-size: 15px; letter-spacing: 0.35rem;"> HÒA MÌNH TẬN HƯỞNG</div>
                <div class="icielbegum yellow-light-color d-none d-md-block" style="font-size: 2.66vw; line-height: 0.55"> THIÊN ĐƯỜNG TIỆN ÍCH HẠNG A</div>
                <div class="icielbegum yellow-light-color d-md-none text-center" style="font-size: 28px; line-height: 1.25"> THIÊN ĐƯỜNG TIỆN ÍCH </div>
                <div class="icielbegum yellow-light-color d-md-none text-center pb-2" style="font-size: 28px; line-height: 1.25">  HẠNG A</div>
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
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> CÔNG VIÊN SAKURA </div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> CÔNG VIÊN SAKURA </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%"> Sắc hương anh đào nở rộ giữa thành phố Hoa Phượng đỏ </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%"> Sắc hương anh đào nở rộ giữa thành phố Hoa Phượng đỏ </div>
                <img src="{{asset('images/utility/doc1.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white" style="text-align: justify; font-size: 13px">
                    Mang đúng tinh thần Zen tái hiện trong không gian sống, các căn hộ tại The Minato Residence
                    được thiết kế tinh tế, tối giản và thấm đượm hơi thở Nhật Bản trong từng đường nét. Phong cách
                    thiết kế nội thất tại The Minato Residence không mang vẻ lộng lẫy hay xa hoa, thay vào đó sẽ tạo
                    điểm nhấn thông qua sự trang nhã của màu sắc và chất liệu thô mộc ấm áp, hòa quyện với bức tranh
                    thiên nhiên hùng vĩ của núi Phú Sĩ vẽ trên tường ngăn, cửa trượt Shoji
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/2.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> CÔNG VIÊN TRẺ EM </div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> CÔNG VIÊN TRẺ EM </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%"> Vườn ươm sắc màu dung dưỡng những mầm non </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%"> Vườn ươm sắc màu dung dưỡng những mầm non  </div>
                <img src="{{asset('images/utility/doc2.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white" style="text-align: justify; font-size: 13px">
                    Khu vui chơi ngoài trời được bao quanh bởi hệ sinh thái tự nhiên với cây cỏ ngập tràn cùng không khí
                    trong lành, mát mẻ. Đây sẽ là nơi các bạn nhỏ được tiếp xúc gần gũi với thiên nhiên bao la, mở rộng
                    tầm nhìn trong không gian khoáng đạt, cùng giao lưu và kết nối với cộng đồng dân cư đa quốc gia đã
                    hiện hữu tại dự án, vẽ những nét chấm phá đầu tiên về cuộc sống muôn màu trong thế giới quan non nớt
                    và dần hoàn thiện bức tranh trưởng thành tại The Minato Residence.
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/3.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> PHÒNG VUI CHƠI TRẺ EM</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> PHÒNG VUI CHƠI TRẺ EM </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Rộn rã tiếng cười ngập tràn hạnh phúc  </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%"> Rộn rã tiếng cười ngập tràn hạnh phúc  </div>
                <img src="{{asset('images/utility/doc3.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white" style="text-align: justify; font-size: 13px;">
                    Khu vui chơi trong nhà cũng được The Minato Ressidence chăm chút kiến tạo với không gian được thiết
                    kế mở, trang thiết bị an toàn, hiện đại với chất lượng an toàn hàng đầu giúp các bậc phụ huynh yên
                    tâm trao gửi để con trẻ có những trải nghiệm tuổi thơ tuyệt vời nhất.
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/4.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> PHÒNG TIỆC</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> PHÒNG TIỆC </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Sang trọng, đẳng cấp, đa công năng</div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Sang trọng, đẳng cấp, đa công năng </div>
                <img src="{{asset('images/utility/doc4.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    Hệ thống phòng tiệc tại The Minato Residence được thiết kế theo phong cách hiện đại với
                    sức chứa lớn, linh hoạt đa công năng khi vừa có thể là nơi tổ chức những buổi tiệc xa hoa
                    đẳng cấp, vừa có thể là nơi tổ chức các hoạt động sinh hoạt động đồng hay các lớp học nâng cao
                    thể chất dành riêng cho cư dân.
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/5.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> SẢNH CHÍNH</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> SẢNH CHÍNH</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Không gian tiếp khách sang trọng xứng tầm </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Không gian tiếp khách sang trọng xứng tầm </div>
                <img src="{{asset('images/utility/doc5.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    Mang theo âm hưởng thiết kế Á Đông, vừa đơn giản lại không kém phần tiện nghi sang trọng,
                    sảnh đón khách của The Minato Residence mang lại cảm giác hài lòng và ấm áp mỗi khi trở về.
                    Từ chất lượng dịch vụ đến đội ngũ nhân viên đều được đảm bảo theo tiêu chuẩn 5 sao Quốc tế.
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/6.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> PHÒNG GYM</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> PHÒNG GYM</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Sống tràn năng lượng với Phòng Gym hiện đại </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Sống tràn năng lượng với Phòng Gym hiện đại </div>
                <img src="{{asset('images/utility/doc6.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    Phòng Gym tại The Minato Residence được trang bị hệ thống dụng cụ đa dạng theo xu hướng với
                    chất lượng hàng đầu, nhằm đem đến trải nghiệm tập luyện hoàn hảo nhất cho cư dân. Đặc biệt,
                    phòng tập được thiết kế rộng thoáng với tầm nhìn mở, hướng thẳng ra cảnh quan sinh thái nội khu,
                    biến khoảng thời gian tập luyện trở thành những phút giây thư thái tận hưởng, kiến tạo một không
                    gian lý tưởng giúp cư dân tái tạo năng lượng, giải tỏa căng thẳng và nâng cao tinh thần sau ngày
                    dài làm việc.
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/Mask group.png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> CAFE ROOFTOP</div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> CAFE ROOFTOP</div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Cafe Rooftop với tầm view nhìn toàn bộ thành phố Hải Phòng và sông Lạch Tray </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Cafe Rooftop với tầm view nhìn toàn bộ thành phố Hải Phòng và sông Lạch Tray </div>
                <img src="{{asset('images/utility/doc7.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px">
                    Chăm sóc tinh thần và tận hưởng thời gian chất lượng bên bạn bè qua những buổi gặp gỡ tại Cafe
                    Rooftop với tầm nhìn toàn cảnh thành phố Cảng
                </div>
            </div>
            <div class="mg02"style="">
                <img src="{{asset('images/utility/Mask group (1).png')}}" alt="" class="img-fluid">
                <div class="icielbegum d-none d-md-block" style="font-size: 3rem; color: #EFD483; padding-top: 1%"> BỂ BƠI NGOÀI TRỜI </div>
                <div class="icielbegum d-block d-md-none" style="font-size: 1.563rem; color: #EFD483; padding-top: 6%"> BỂ BƠI NGOÀI TRỜI </div>
                <div class="d-none d-md-block mulish-extrabold text-uppercase mb-5" style="font-size: 1.25rem; color: white; padding-top: 0.5%">Thả mình thư giãn trong làn nước xanh mát </div>
                <div class="d-block d-md-none mulish-extrabold text-uppercase mb-3" style="font-size: 13px; color: white; padding-top: 0.5%">Thả mình thư giãn trong làn nước xanh mát </div>
                <img src="{{asset('images/utility/doc8.png')}}" alt="" style="margin-left: 0.2%" class="img-fluid d-none d-md-block pb-5">
                <div class="d-block d-md-none d-block d-md-none cabin-medium text-white " style="text-align: justify; font-size: 13px; ">
                    Bể bơi ngoài trời tại The Minato Residence sẽ là nơi các cư dân tìm đến để được thư giãn đúng nghĩa,
                    thả lòng hoàn toàn cơ thể và tinh thần, đắm chìm vào cảm giác an nhiên, tự tại mà dự án mang lại.
                    Dưới bàn tay của các kiến trúc sư tinh hoa Nhật Bản, bể bơi được trang bị hệ thống chiếu sáng thông
                    minh hiện đại, thiết kế đơn giản nhưng không kém phần sang trọng cùng hệ thống lọc nước chuẩn Quốc
                    tế, đảm bảo vấn đề chất lượng và sãn sàng cho các cư dân có nơi thư giãn tiện nghi mỗi ngày.
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
        top: 20%;
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
