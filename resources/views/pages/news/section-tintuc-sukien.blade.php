<div class="tintuc-sukien d-none d-md-block">
    <div class=" d-flex justify-content-center align-items-center mulish-extrabold text-white"
         style="font-size: 1.09vw; ">
        THE MINATO RESIDENCE
    </div>
    <div class=" d-flex justify-content-center align-items-center icielbegum yellow-light-color mb-5"
         style="font-size: 2.66vw; ">
        TIN TỨC & SỰ KIỆN
    </div>
    <div class="section-tintuc-sukien d-flex justify-content-center align-items-center">
        <div id="section-tintuc-sukien" class="carousel slide w-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#section-tintuc-sukien" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#section-tintuc-sukien" data-bs-slide-to="1" class=""
                        aria-label="Slide 2" aria-current="true"></button>
                <button type="button" data-bs-target="#section-tintuc-sukien" data-bs-slide-to="2" class=""
                        aria-label="Slide 3" aria-current="true"></button>
            </div>
            <div class="carousel-inner">

                @foreach($three_articles as $key => $article)
                    <div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
                        <img src="{{asset('images/tintuc-kienthuc/bg-1.png')}}" class="img-slide position-relative "
                             alt="img-slide">
                        <div class="position-absolute custom-top start-50 px-5" style="text-align: justify;">
                            <h3 class="cabin-medium"
                                style="font-size: 35px; color: #133351; letter-spacing: 1px">{{\Illuminate\Support\Str::limit($article->title,500)}}</h3>
                            <div class="cabin-medium pt-4 pe-4" style="font-size: 18px; color: #43496B">
                                {{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 350)) }}
                            </div>
                            <div class="d-flex align-content-center justify-content-start mt-4 cabin-medium"
                                 style="padding-top: 10%; color: #D93D32">
                                <a href="{{route('news.show',['slug' => $article->slug])}}"> XEM CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#section-tintuc-sukien"
                    data-bs-slide="prev">
                <img src="{{asset('images/button/left.png')}}" alt="Previous" class="button-shake img-carousel-arrow">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#section-tintuc-sukien"
                    data-bs-slide="next">
                <img src="{{asset('images/button/right.png')}}" alt="Next" class="button-shake img-carousel-arrow">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<style>
    .tintuc-sukien {
        background-image: url("/images/footer/background-footer.png");
        background-size: cover;
        padding: 5% 0 5% 0;
    }

    .custom-top {
        top: 30%;
    }

    a {
        color: unset;
        text-decoration: unset;
    }
</style>
