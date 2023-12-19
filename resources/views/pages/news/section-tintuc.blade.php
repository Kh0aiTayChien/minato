<div class="tintuc">
    <div class=" d-none d-md-flex justify-content-center align-items-center icielbegum yellow-light-color mb-5"
         style="font-size: 51px; ">
        {{ __('news/sec2.title2') }}
    </div>
    <div class=" d-flex d-md-none justify-content-center align-items-center icielbegum yellow-light-color "
         style="font-size: 29px; ">
        {{ __('news/sec2.title2') }}
    </div>
    <div class="row gy-5 gx-1 mt-2 px-3">
        @foreach($articles as $article)
            <div class="col-lg-4 col-xs-12">
                <div class="d-flex justify-content-center">
                    <a href="{{route('news.show',['slug' => $article->slug])}}"
                       style="text-decoration: unset; color: unset">
                        {{--                        <a href="" style="text-decoration: unset; color: unset">--}}
                        <div class="card shadow-effect me-1 bg-transparent-black"
                             style="width:30rem; height: 100% ">
                            <img class="card-img-top img-fluid" style="height: 19rem; object-fit: cover"
                                 src="{{$article->image}}"
                                 {{--                            <img class="card-img-top  img-fluid" src="{{asset('images/homepage/section-7/eg.png')}}"--}}
                                 alt="Card image">
                            <div class="card-body">
                                {{--                                <p class="height-text-card green-text font-size-custom"><strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>--}}
                                {{--                                <p class="card-text " style="height: 6rem">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 70)) }}</p>--}}
                                <p class="height-text-card cabin-medium text-white"
                                   style="font-size: 15px; letter-spacing: 2px; height: 3.5rem">
                                    <strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>

                                <div class="d-flex align-content-center justify-content-start cabin-medium mt-5 mb-4"
                                     style="font-size: 13px">
                                    <a href="" class="yellow-light-color" style="text-decoration: unset">{{ __('homepage/section7.detail') }}</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<style>
    .tintuc {
        background-image: url("/images/footer/background-footer.png");
        background-size: cover;
        padding: 10% 0 5% 0;
    }

    .bg-transparent-black {
        background-color: rgba(0, 0, 0, 0.27); /* Độ trong suốt: 0.5 (từ 0 đến 1) */
    }
</style>
