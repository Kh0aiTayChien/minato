<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        $categoryArticleSlug = "chia-se-kien-thuc";
        $news = Article::whereHas('category', function ($query) use ($categoryArticleSlug) {
            $query->where('slug', $categoryArticleSlug);
        })
            ->where('status', 1)
            ->take(6)
            ->get();


        return view('pages/home-page/index', ['news' => $news]);
    }
}
