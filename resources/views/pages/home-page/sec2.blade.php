<div class="sec2-HP-pc d-none d-sm-block">
    <p class="header-first-line-hp-1 co-header-css mulish-extrabold space-21" data-aos="fade-right" data-aos-duration="3000">The Minato Residence</p>
    <p class="header-second-line-hp-1 co-header-css icielbegum space-51" data-aos="fade-left" data-aos-duration="3000" style="text-transform: uppercase">{{ __('homepage/section2.mainTitle1') }}</p>
    <p class="header-second-line-hp-1 co-header-css icielbegum space-51" data-aos="fade-right" data-aos-duration="3000">{{ __('homepage/section2.mainTitle2') }}</p>
    <div class="row-test-1">
        <div class="left-test-1" style="padding-left: 4%; padding-top: 4%" >
            <p class="first-text-hp text-content1-sec2-hp space-15 text-hp cabin-medium pb-4" data-aos="fade-right" data-aos-duration="3000">
                {{ __('homepage/section2.mainContent1') }}
            </p>
            <a href="{{route('introduce.index')}}" class="double-border first-text-hp px-3 mulish-black space-21-btn" data-aos="fade-up" data-aos-duration="3000">
                {{ __('homepage/section2.btn') }}
            </a>
        </div>
        <img src="{{asset('images/homepage/sec2/21321-01.jpg')}}" class="img-sec2-hp-1 right-test-1" data-aos="fade-left" data-aos-duration="3000">
    </div>
    <br>
    <div class="row-test" style="padding-top: 2%">
        <img src="{{asset('images/homepage/sec2/Bản đồ hạ tầng 1.png')}}" class="left-test img-sec2-hp-2" data-aos="fade-right" data-aos-duration="3000">
        <div class="d-block" style="" data-aos="fade-left" data-aos-duration="3000">
            <p class="header-first-line-hp space-21 header-content2-sec2-hp mulish-extrabold pb-2">{{ __('homepage/section2.mainTitle3') }}</p>
            <p class="header-second-line-hp header-content2-sec2-hp space-51 icielbegum">{{ __('homepage/section2.mainTitle4') }}</p>
            <p class="header-second-line-hp header-content2-sec2-hp icielbegum space-51">{{ __('homepage/section2.mainTitle5') }}</p>
            <p class="header-second-line-hp header-content2-sec2-hp icielbegum space-51">{{ __('homepage/section2.mainTitle6') }}</p>
            <p class="header-second-line-hp header-content2-sec2-hp icielbegum space-51" style="line-height: 40px">{{ __('homepage/section2.mainTitle7') }}</p>
            <div class="d-block" style="width: 20vw; padding-top: 2%; padding-bottom: 2%">
            <p class="text-hp text1-content2-sec2-hp cabin-medium space-15">
                {{ __('homepage/section2.mainContent2') }}
            </p>

{{--            <p class="text-hp  text1-content2-sec2-hp cabin-medium pb-4 space-15">Nằm tại lõi trung tâm mới của thành phố Hải Phòng, The Minato--}}
{{--                Residence là tâm điểm giao--}}
{{--                thoa--}}
{{--                với hệ tiện ích ngoại khu đạt chuẩn quốc tế đáp ứng mọi nhu cầu từ ăn uống, vui chơi, giải trí đến mua--}}
{{--                sắm, giáo dục, y tế chỉ trong vài bước chân.</p>--}}
            </div>
            <div class="btn-content2-sec2-hp">
                <a href="{{route('location.index')}}"
                   class="btn-content2-sec2-hp double-border px-3 mulish-black space-21-btn">{{ __('homepage/section2.btn') }}</a>
            </div>
        </div>
    </div>
</div>

<div class="sec2-hp-mb d-block d-sm-none">
    <p class="header-first-line-hp-mb line-height-cap mulish-extrabold">The Minato Residence</p>
    <p class="header-second-line-hp-mb line-height-cap icielbegum" style="font-size: 29px; text-transform: uppercase">{{ __('homepage/section2.mainTitle1') }}</p>
    <p class="header-second-line-hp-mb line-height-cap icielbegum" style="">{{ __('homepage/section2.mainTitle2') }}</p>
    <p class="text-hp-mb cabin-medium mt-4">{{ __('homepage/section2.mainContent1') }}</p>
    <img src="{{asset('images/homepage/sec2/Mask group (3).png')}}" class="col-11 img-sec2-hp-mb">
    <a href="#" class="double-border px-4 py-1 btn-sec2-hp-mb mulish-black space-15">
        {{ __('homepage/section2.btn') }}
    </a>
    <p class="header-first-line-hp-mb line-height-cap mulish-extrabold pt-5">{{ __('homepage/section2.mainTitle3') }}</p>
    <p class="header-second-line-hp-mb line-height-cap icielbegum" style="font-size: 29px; text-transform: uppercase">{{ __('homepage/section2.mainTitlem4') }}</p>
    <p class="header-second-line-hp-mb line-height-cap icielbegum" style="font-size: 29px; text-transform: uppercase">{{ __('homepage/section2.mainTitlem5') }}</p>
    <p class="text-hp-mb cabin-medium mt-4">{{ __('homepage/section2.mainContent2') }}</p>
    <img src="{{asset('images/homepage/sec2/image 6.png')}}" class="col-11 img-sec2-hp-mb">
    <a href="{{route('location.index')}}" class="double-border px-4 py-1 btn-sec2-hp-mb mulish-black space-15">
        {{ __('homepage/section2.btn') }}
    </a>
</div>
