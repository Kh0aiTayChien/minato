<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Minato Residence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
            integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script
        src = "https://cdn.jsdelivr.net/gh/KodingKhurram/animate.css-dynamic@main/animate.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tarkhov/postboot/v1.0.3/dist/css/postboot.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="{{asset('/css/header.css')}}" rel="stylesheet">
    <link href="{{asset('/css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/section-1.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/sec2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/sec3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/sec5.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/sec7-v.css')}}" rel="stylesheet">
    <link href="{{asset('/css/introduce/sec1.css')}}" rel="stylesheet">
    <link href="{{asset('/css/introduce/sec2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/introduce/sec3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/introduce/sec4.css')}}" rel="stylesheet">
    <link href="{{asset('/css/introduce/sec5.css')}}" rel="stylesheet">
    <link href="{{asset('/css/location/sec2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/location/sec3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/product-v/sec2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/product-v/sec3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/contact-v/sec2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/tien-do/sec2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
    {!! SEO::generate() !!}
    <style>
        body {
            overflow-x: hidden;
            touch-action: pan-y;
        }
    </style>
    <style>
        .my-video {
            height: 500px; /* Thiết lập chiều cao cho video */
        }

        .my-video video {
            height: 100%; /* Đảm bảo video chiếm toàn bộ chiều cao của container */
            width: 100%; /* Đảm bảo video chiếm toàn bộ chiều rộng của container */
            object-fit: cover; /* Đảm bảo video giữ tỷ lệ và cắt để vừa với container nếu cần */
        }
    </style>
</head>
<body>
@if(app()->getLocale() === 'vi')
    @include('page-layout/header')
@elseif(app()->getLocale() === 'en')
    @include('page-layout/header')
@elseif(app()->getLocale() === 'ja')
    @include('page-layout/header-ja')
@endif

@yield('section')

@if(app()->getLocale() === 'vi')
    @include('page-layout/footer')
@elseif(app()->getLocale() === 'en')
    @include('page-layout/footer')
@elseif(app()->getLocale() === 'ja')
    @include('page-layout/footer-ja')
@endif
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    const player = new Plyr('#player');
</script>
</body>
</html>
