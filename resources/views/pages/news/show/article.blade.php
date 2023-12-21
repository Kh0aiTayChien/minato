<div class=" content-article background-gardien text-white">
    {{--    <div class="justify-content-center align-content-center mt-4 d-none d-md-flex">--}}
    {{--        <img src="{{$article->image}}" alt="" style="width: 62.5vw;--}}
    {{--        margin-bottom: 2rem; " class="img-fluid">--}}
    {{--    </div>--}}
    {{--    <div class="d-flex justify-content-center align-content-center mt-4 d-md-none">--}}
    {{--        <img src="{{$article->image}}" alt="" style=" scale: 100%;--}}
    {{--        margin-bottom: 2rem; " class="img-fluid">--}}
    {{--    </div>--}}
    <h2 align="center" class="tilte-text pt-5 px-3">{{$article->title}}</h2>
    <div class="d-flex justify-content-center align-content-center">
        <p class="datetime_text p-2 text-center pb-3"> Ngày đăng: {{$article->created_at}} </p>
    </div>
    <div class="d-flex justify-content-center align-content-center">
        <div class="content p-3 pb-5" style= "width: 75%; text-align: justify; ">
            {!! $article->content!!}
        </div>
    </div>

    <div class="d-flex align-content-center justify-content-start">

        <a href=""
           class="btn  btn-block mb-3 rounded-pill border-1 monte-semibold super-long button-shake">
            <span>XEM THÊM BÀI VIẾT</span>
        </a>
    </div>
</div>

<style>
    .background-gardien {
        background-image: linear-gradient(black, #141C46);
    }
    .content img {
        display: block;
        margin: 0 auto;
        max-width: 100%; /* Để đảm bảo hình ảnh không vượt quá phạm vi của phần tử cha */
    }

</style>
<script>
    $(document).ready(function () {
        $('.image img').addClass('img-fluid');
        $('.image ').addClass('figure-image ');
    });
</script>
