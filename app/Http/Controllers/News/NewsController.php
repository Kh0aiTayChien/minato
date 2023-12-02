<?php

namespace App\Http\Controllers\News;

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

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $three_articles = Article::take(3)->get();
        $articles = Article::all();
        return view('pages/news/index', ['articles' => $articles, 'three_articles' => $three_articles]);
    }

    public function show($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $articles = Article::all();
        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('Minato/'.$slug);

        OpenGraph::setDescription('Minato/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('news.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(url($article->image));

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('Minato/'.$slug);
        JsonLd::addImage(url($article->image));
        return view('pages/news/show/index', ['article' => $article,'articles' => $articles ]);
    }
}
