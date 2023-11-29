<div class="thuvien">
    <div class=" d-flex justify-content-center align-items-center mulish-extrabold mb-3"
         style="font-size: 21px; color: #43496B; letter-spacing: 3px">
        THE MINATO RESIDENCE
    </div>
    <div class=" d-flex justify-content-center align-items-center icielbegum" style="font-size: 51px; color: #141C46">
        THƯ VIỆN
    </div>

    <div class="mt-4 mb-4" style="">
        <div class="row px-5 mx-5 mb-5 gx-3 gy-2">
            <div class="col-md-3 d-flex justify-content-center align-content-center">
                <button class="tab-button btn btn-block shadow-effect blue-border-bottom
                                 text-white  mulish-extrabold button-shake active"
                        data-target="tab1" style="width: 100%">
                    <div class=" font-size-custom">HÌNH ẢNH</div>
                </button>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-content-center">
                <button class="tab-button btn  btn-block  shadow-effect blue-border-bottom
                                 text-white  mulish-extrabold button-shake"
                        data-target="tab2" style="width: 100%">
                    <div class="  font-size-custom">VIDEO</div>
                </button>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-content-center">
                <button class="tab-button btn  btn-block  shadow-effect blue-border-bottom
                                 text-white  mulish-extrabold button-shake"
                        data-target="tab3" style="width: 100%">
                    <div class=" font-size-custom">BROCHURE</div>
                </button>
            </div>
            <div class="col-md-3 d-flex justify-content-center align-content-center">
                <button class="tab-button btn  btn-block  shadow-effect blue-border-bottom
                                 text-white  mulish-extrabold button-shake"
                        data-target="tab3" style="width: 100%">
                    <div class=" font-size-custom">FLYER</div>
                </button>
            </div>
        </div>
    </div>

    <div class=" tabs mb-3 pb-3">
        <div class="row tab tab1  mt-5 gy-4 gx-0 active" style="">
            <div class="mt-1" style="">
                <div class="row px-5 mx-5 gx-3 gy-2">
                    <div class="col-md-1  d-flex justify-content-center align-content-center ">
                        <button class="tab-m1-button btn btn-block shadow-effect
                                 text-white  mulish-extrabold button-shake active"
                                data-target="tab11" style="width: 100%">
                            <div class=" font-size-custom" style="">TẤT CẢ</div>
                        </button>
                    </div>
                    <div class="col-md-1 d-flex justify-content-center align-content-center">
                        <button class="tab-m1-button btn  btn-block  shadow-effect
                                 text-white  mulish-extrabold button-shake"
                                data-target="tab22" style="width: 100%">
                            <div class=" ">TỔNG THỂ</div>
                        </button>
                    </div>
                    <div class="col-md-1 d-flex justify-content-center align-content-center">
                        <button class="tab-m1-button btn  btn-block  shadow-effect
                                 text-white  mulish-extrabold button-shake"
                                data-target="tab33" style="width: 100%">
                            <div class="">TIỆN ÍCH</div>
                        </button>
                    </div>
                    <div class="col-md-1 d-flex justify-content-center align-content-center">
                        <button class="tab-m1-button btn  btn-block  shadow-effect
                                 text-white  mulish-extrabold button-shake"
                                data-target="tab44" style="width: 100%">
                            <div class="">NỘI THẤT</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row tab tab11  active" style="">
                <div class="" style="padding:3%">
                    <div class="d-flex align-content-center justify-content-center">
                        <img src="{{asset('images/thuvien/tatca/C1.png')}}" alt="" class="img-fluid me-2">
                        <img src="{{asset('images/thuvien/tatca/C2.png')}}" alt="" class="img-fluid me-2">
                        <img src="{{asset('images/thuvien/tatca/C7.png')}}" alt="" class="img-fluid me-2">
                    </div>
                    <div class="d-flex align-content-center justify-content-center mt-2">
                        <img src="{{asset('images/thuvien/tatca/C8.png')}}" alt="" class="img-fluid me-2">
                        <img src="{{asset('images/thuvien/tatca/C9.png')}}" alt="" class="img-fluid me-2">
                        <img src="{{asset('images/thuvien/tatca/C12.png')}}" alt="" class="img-fluid me-2">
                    </div>
                    <div class="d-flex align-content-center justify-content-center mt-2">
                        <img src="{{asset('images/thuvien/tatca/C13.png')}}" alt="" class="img-fluid me-2">
                        <img src="{{asset('images/thuvien/tatca/C14.png')}}" alt="" class="img-fluid me-2">
                        <img src="{{asset('images/thuvien/tatca/D10.png')}}" alt="" class="img-fluid me-2">
                    </div>
                </div>
            </div>
            <div class="row tab tab22  mt-5 gy-4 gx-0 " style="">

            </div>
            <div class="row tab tab33  mt-5 gy-4 gx-0 " style="">

            </div>
            <div class="row tab tab44  mt-5 gy-4 gx-0 " style="">

            </div>

        </div>


        <div class="row tab tab2  mt-5 gy-4 gx-0 " style="">

        </div>
        <div class="row tab tab3  mt-5 gy-4 gx-0 " style="">

        </div>
        <div class="row tab tab4  mt-5 gy-4 gx-0 " style="">

        </div>
    </div>


</div>
<style>
    .thuvien {
        background-image: url("/images/thuvien/background-thuvien.png");
        background-size: cover;
        padding: 5% 0 5% 0;
    }
</style>
<style>
    .tab-button.active {
        background-color: #133351;
        color: white !important;
    }

    .tab-button {
        color: #133351 !important;
    }

    .tabs .tab {
        display: none;
    }

    .tabs .tab.active {
        display: flex;
    }

    .tab-m1-button {
        color: darkblue !important;
    }

    .tab-m1-button.active {
        color: red !important;
    }

    .blue-border-bottom {
        border-bottom: 2px solid #133351;
        cursor: pointer;
        border-radius: unset;
    }

    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: none !important;
    }
</style>
<script>
    $(document).ready(function () {
        $('.tab-button').click(function () {
            let target = $(this).data('target');

            $('.tab-button').removeClass('active');
            $(this).addClass('active');

            $('.tab').removeClass('active');
            $('.' + target).addClass('active');
        });
        $('.tab-m1-button').click(function () {
            let target = $(this).data('target');

            $('.tab-m1-button').removeClass('active');
            $(this).addClass('active');

            let parentTab = $('.tab.active');

            let tabContent = parentTab.find('.' + target);

            parentTab.find('.tab').removeClass('active');

            tabContent.addClass('active');
        });
    });
</script>
