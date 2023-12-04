<?php

namespace App\Http\Controllers\Contact;

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
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('pages/contact-v/index');
    }

    public function viewPDF()
    {
        return Response::make(file_get_contents('images/thuvien/brochure/BROCHURE.pdf'), 200, [
            'content-type'=>'application/pdf',
        ]);
    }
}
