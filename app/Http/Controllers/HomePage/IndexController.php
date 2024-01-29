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

        $categoryImgSlug = "slide-trang-chu-tieng-anh-pc";
        $images_eng_pc = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryImgSlug = "slide-trang-chu-tieng-viet-pc";
        $images_viet_pc = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryImgSlug = "slide-trang-chu-tieng-nhat-pc";
        $images_japan_pc = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryImgSlug = "slide-trang-chu-tieng-anh-mobile";
        $images_eng_mobile = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryImgSlug = "slide-trang-chu-tieng-viet-mobile";
        $images_viet_mobile = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryImgSlug = "slide-trang-chu-tieng-nhat-mobile";
        $images_japan_mobile = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

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
        return view('pages/home-page/index', [
            'articles' => $articles,
            'images_english_pc' => $images_eng_pc,
            'images_vietnamese_pc' => $images_viet_pc,
            'images_japanese_pc' => $images_japan_pc,
            'images_english_mobile' => $images_eng_mobile,
            'images_vietnamese_mobile' => $images_viet_mobile,
            'images_japanese_mobile' => $images_japan_mobile,
        ]);
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
