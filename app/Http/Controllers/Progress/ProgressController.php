<?php

namespace App\Http\Controllers\Progress;

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

class ProgressController extends Controller
{
    public function index(Request $request)
    {
        $categoryImgSlugVi = "slide-tien-do-vi";
        $images_tien_do_vi = Image::whereHas('category', function ($query) use ($categoryImgSlugVi) {
            $query->where('slug', $categoryImgSlugVi);
        })->get();

        $categoryImgSlugEn = "slide-tien-do-en";
        $images_tien_do_en = Image::whereHas('category', function ($query) use ($categoryImgSlugEn) {
            $query->where('slug', $categoryImgSlugEn);
        })->get();

        $categoryImgSlugJa = "slide-tien-do-ja";
        $images_tien_do_ja = Image::whereHas('category', function ($query) use ($categoryImgSlugJa) {
            $query->where('slug', $categoryImgSlugJa);
        })->get();
        return view('pages/Tien-do/index',
            [
                'images_tien_do_vi' => $images_tien_do_vi,
                'images_tien_do_en' => $images_tien_do_en,
                'images_tien_do_ja' => $images_tien_do_ja,
            ]);
    }
}
