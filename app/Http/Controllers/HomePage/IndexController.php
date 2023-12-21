<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMailable;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::all();
        SEOMeta::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        SEOMeta::setDescription('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc
        Đầu tiên tại Miền Bắc. Công viên Sakura rộng 3000m2. Tinh hoa Nhật Bản - An yên giữa lòng phố Cảng' );

        OpenGraph::setDescription('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc
        Đầu tiên tại Miền Bắc. Công viên Sakura rộng 3000m2. Tinh hoa Nhật Bản - An yên giữa lòng phố Cảng' );
        OpenGraph::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        OpenGraph::setUrl('https://theminatoresidence.vn/vi/');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage('https://theminatoresidence.vn/images/homepage/section-1/L11.jpg');

        TwitterCard::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        TwitterCard::setSite('http://127.0.0.1:8000/images/homepage/section-1/L11.jpg');

        JsonLd::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        JsonLd::setDescription('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc
        Đầu tiên tại Miền Bắc. Công viên Sakura rộng 3000m2. Tinh hoa Nhật Bản - An yên giữa lòng phố Cảng' );
        JsonLd::addImage('https://theminatoresidence.vn/images/homepage/section-1/L11.jpg');
        return view('pages/home-page/index', ['articles' => $articles]);
    }

    public function send(Request $request)
    {
        $viewData = [
            'status' => 'register_send',
        ];
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $detail = $request->detail;

      Mail::to('minato.info@waterfrontcity.vn')->send(new RegisterMailable($name, $phone, $email, $detail));
//        Mail::to('chien.hcckt@gmail.com')->send(new RegisterMailable($name, $phone, $email, $detail));
        return response()->json($viewData);
    }
}
