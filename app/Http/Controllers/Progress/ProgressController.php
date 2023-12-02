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
        return view('pages/Tien-do/index');
    }
}
