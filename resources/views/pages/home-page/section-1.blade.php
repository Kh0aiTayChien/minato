<div class="d-none d-md-block">
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
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/homepage/section-1/p3.jpg')}}" class="img-slide img-fluid normal-screen"
                         alt="img-slide">
                    <img src="{{asset('images/homepage/section-1/l3.jpg')}}" class="img-slide img-fluid long-screen"
                         alt="img-slide">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homepage/section-1/p2.jpg')}}" class="img-slide img-fluid normal-screen"
                         alt="img-slide">
                    <img src="{{asset('images/homepage/section-1/l2.png')}}" class=" img-slide img-fluid long-screen"
                         alt="img-slide">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homepage/section-1/p1.jpg')}}" class="img-slide img-fluid normal-screen"
                         alt="img-slide">
                    <img src="{{asset('images/homepage/section-1/l1.jpg')}}" class="img-slide img-fluid long-screen"
                         alt="img-slide">
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
                <div class="carousel-item active">
                    <img src="{{asset('images/homepage/section-1/m3.jpg')}}" class="img-slide img-fluid"
                         alt="img-slide" style="height: 092vh">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homepage/section-1/m2.jpg')}}" class="img-slide img-fluid "
                         alt="img-slide" style="height: 092vh">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/homepage/section-1/m1.jpg')}}" class="img-slide img-fluid "
                         alt="img-slide" style="height: 092vh">
                </div>
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

