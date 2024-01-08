<div class="footer" id="footer">
    <div class="container-fluid custom-padding">
        <div class="title" style="">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="mulish-extrabold text-white d-none d-md-block"
                         style="font-size: 1.09vw; letter-spacing: 0.35rem; width: 90%">THE MINATO RESIDENCE
                    </div>
                    <div class="mulish-extrabold text-white d-flex  d-md-none"
                         style="letter-spacing: 0.35rem; font-size: 15px">THE MINATO RESIDENCE
                    </div>
                    <div class="icielbegum yellow-light-color mt-3 d-none d-md-block"
                         style="font-size: 2.66vw; width: 90%">
                        {{__('footer.headerForm')}}
                    </div>
                    <div class="icielbegum yellow-light-color mt-3 d-flex  d-md-none "
                         style="font-size: 29px">
                        {{__('footer.headerForm')}}
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="d-flex justify-content-end justify-content-end">
                        <img src="{{asset('images/footer/minato-white-logo.png')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
        <form method="POST" class="" action="" style="letter-spacing: 2px" id="registration-form">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group contact-form  mt-3">
                        <label for="contact_name" class="cabin-medium text-white" style="font-size: 13px">
                            {{__('footer.fullName')}}
                        </label>
                        <br>
                        <input type="text" name="name" id="fullname" class="mt-3">
                    </div>
                    <div class="form-group contact-form mt-3">
                        <label for="contact_phone" class=" cabin-medium text-white" style="font-size: 13px">
                            {{__('footer.phoneNumber')}}
                        </label>
                        <br>
                        <input type="text" name="phone" id="phone" class="mt-3">
                    </div>
                    <div class="form-group contact-form mt-3">
                        <label for="contact_email" class="cabin-medium text-white"
                               style="font-size: 13px">{{__('footer.emailAddress')}}</label>
                        <br>
                        <input type="text" name="email" id="email" class="mt-3">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group" style="">
                        <label for="contact_content" class="cabin-medium text-white mt-3" style="font-size: 13px">
                            {{__('footer.dt')}}
                        </label>
                        <br>
                        <textarea type="text" name="detail" id="contact_content" class="text-area">
                        </textarea>
                        <br>
                        <div class="mt-5 d-none d-md-block" style="width: 80%">
                            <div class="btn-content-footer">
                                <button onclick=""
                                        class="double-border px-5 py-1 mulish-black space-21-btn">{{__('footer.btn')}}
                                </button>
                            </div>
                        </div>
                        <div class="mt-5 d-block d-md-none" style="width: 80%;">
                            <div class="">
                                <button onclick=""
                                        class="double-border px-5 py-1 mulish-black space-21-btn">{{__('footer.btn')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <hr class="my-line mt-5">

        <div class="about mt-5">
            <div class="row">
                <div class="col-md-2 col-xs-12 d-none d-md-block">
                    <div class="d-flex justify-content-end justify-content-end">
                        <img src="{{asset('images/footer/minato-yellow.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 d-md-none">
                    <div class="d-flex justify-content-end justify-content-center">
                        <img src="{{asset('images/footer/minato-yellow.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 mt-5">
                    <div class="">
                        <div
                            class="mulish-extrabold yellow-light-color d-flex d-md-block "
                            style="font-size: 18px">{{__('footer.PROJECTINFOMATION')}}
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-content-center mt-5 custom-padding-footer-last ">
                        <div class="cabin-medium text-white" style="font-size: 13px; letter-spacing: 1px">
                            <div class="investor">
                                <p>{{__('footer.c1line1')}} <br>{{__('footer.c1line2')}}</p>
                            </div>

                            <div class="contractor">
                                <p>{{__('footer.c1line3')}} <br> {{__('footer.c1line4')}}</p>
                            </div>

                            <div class="operation">
                                <p>{{__('footer.c1line5')}}</p>
                            </div>

                            <div class="address">
                                <p>{{__('footer.c1line6')}} {{__('footer.c1line7')}}</p>
                            </div>

                            <div class="scale">
                                <p>{{__('footer.c1line8')}}</p>
                            </div>

                            <div class="contact">
                                <p>E-mail: minato.info@waterfrontcity.vn</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 mt-5">
                    <div class="" style="width: 100%">
                        <div
                            class="mulish-extrabold yellow-light-color d-flex d-md-block "
                            style="font-size: 18px">{{__('footer.SHOWROOM')}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-content-center mt-5 custom-padding-room"
                         style="width: 80%">
                        <div class="cabin-medium text-white" style="font-size: 13px; letter-spacing: 1px">
                            <div class="additional-info">
                                <p>{{__('footer.c2line1')}}</p>
                                <p>Hotline: 1800 577783</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="about yellow-light-bg text-dark cabin-medium d-none d-md-block" style="font-size: 13px">
        <div class="content py-2">
            {{__('footer.cp')}}
        </div>
    </div>
    <div class="about yellow-light-bg text-dark cabin-medium d-block d-md-none" style="font-size: 13px">
        <div class="content py-2 text-center" style="line-height: 1.25">
            {{__('footer.cpm1')}}
            <br>
            {{__('footer.cpm2')}}
        </div>
    </div>
</div>

<style>
    @media only screen and (max-width: 800px) {
        .custom-padding-room {
            width: 100% !important;
        }
    }

    @media only screen and (max-width: 800px) {
        .custom-padding {
            padding: 10% 5% 5% 5% !important;
        }
    }

    @media only screen and (min-width: 800px) {

        .custom-padding {
            padding: 5% 5% 5% 8% !important;
        }
        .custom-padding-footer-last {
            width: 65%;
        }
    }

    .custom-padding-footer-last {
        padding: 0;
    }

    .yellow-light-bg {
        background-color: #EFD483;
    }

    .yellow-light-color {
        color: #EFD483;
    }

    .my-line {
        border-top: 2px solid #fff;
        width: 90%
    }


    .contact-form input {
        font-size: 14px;
        line-height: 1rem;
        letter-spacing: 0.57px;
        color: #FFFFFF;
        border: none;
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        padding: 0;
        outline: none;
        background: transparent;
        border-radius: 0;
        width: 80%;
    }

    .text-area {
        font-size: 14px;
        line-height: 1rem;
        height: 7.1rem;
        letter-spacing: 0.57px;
        color: #FFFFFF;
        border: none;
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        padding: 0;
        outline: none;
        background: transparent;
        border-radius: 0;
        width: 80%;
    }

    .custom-padding-footer {
        padding: 5% 5% 5% 8%;
    }

    @media only screen and (max-width: 800px) {
        .custom-padding-footer {
            padding: 5% 0 0 0;
        }
    }
</style>
<script>
    $('#registration-form').submit(function (e) {
        e.preventDefault();
        let fullname = $('#fullname').val();
        let phone = $('#phone').val();
        let email = $('#email').val();
        let detail = $('#detail').val();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        alert('Bạn đã gửi thông tin thành công');
        $('#fullname').val('');
        $('#phone').val('');
        $('#email').val('');
        $('#detail').val('');

        $.ajax({
            url: '/info', // Thay đổi đường dẫn tới phần xử lý dữ liệu
            method: 'POST',
            data: {
                name: fullname,
                phone: phone,
                email: email,
                detail: detail
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {

            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>
