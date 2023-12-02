<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
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
        OpenGraph::addImage('');

        TwitterCard::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        TwitterCard::setSite('');

        JsonLd::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        JsonLd::setDescription('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc
        Đầu tiên tại Miền Bắc. Công viên Sakura rộng 3000m2. Tinh hoa Nhật Bản - An yên giữa lòng phố Cảng' );
        JsonLd::addImage('');
        return view('pages/home-page/index', ['articles' => $articles]);
    }
}
