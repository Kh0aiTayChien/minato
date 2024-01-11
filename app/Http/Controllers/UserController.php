<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $searchType = $request->input('search_type');
        $keyword = $request->input('search');
        $paginate = $request->input('paginate');

            $query = User::query();

        if ($searchType == 'title') {
            $query->where('name', 'like', '%' . $keyword . '%');
        } elseif ($searchType == 'content') {
            $query->where('last_name', 'like', '%' . $keyword . '%');
        }

        $query->where('email', '!=', 'nguyenthiphuongthao@waterfrontcity.vn');

        $articles = $query->paginate($paginate);
        return view('admin/user/index',
            compact('articles', 'paginate', 'searchType'));
    }

    public function create()
    {
        $categories = Category::where('type', 1)->get();
        return view('admin/article/create', ['categories' => $categories]);
    }

//    public function store(Request $request)
//    {
//        $validatedData = $request->validate([
//            'title' => 'required|string|unique:articles,title',
//            'category' => 'required',
//            'slug' => 'required|string',
//            'content' => 'required',
//        ], [
//            'title.unique' => 'Tiêu đề đã tồn tại',
//            'title.required' => 'Không được để trống'
//        ]);
//        $article = new User();
//        $article->category_id = $validatedData['category'];
//        $article->title = $validatedData['title'];
//        $article->slug = $validatedData['slug'];
//        $article->content = $validatedData['content'];
//        $article->status = $request->input('status');
//        if ($article->status == 1) {
//            $article->order_number = $request->input('order_number') ?? 1;
//        } else {
//            $article->order_number = null;
//        }
//
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $imageName = $image->getClientOriginalName();
//            $image->move(public_path('uploads/images'), $imageName); // Lưu ảnh vào thư mục trên server
//            $article->image = '/uploads/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
//        }
//        $article->save();
//        $conditionView = 'index';
//        return redirect()->route('articles.index', ['conditionView' => $conditionView])->with('success', 'Tạo bài viết thành công!');
//    }

    public function show($id)
    {

    }

//    public function edit($id)
//    {
//        $article = Article::findOrFail($id);
//        $categories = Category::where('type',1)->get();
//        return view('admin/article/edit', ['article' => $article, 'categories' => $categories]);
//    }

//    public function update(Request $request, $id)
//    {
//        $validatedData = $request->validate([
//            'title' => 'required|string|',
//            'category' => 'required',
//            'slug' => 'required|string',
//            'content' => 'required',
//        ], [
//            'title.unique' => 'Tiêu đề đã tồn tại',
//            'title.required' => 'Không được để trống'
//        ]);
//        $article = Article::findOrFail($id);
//        $article->category_id = $validatedData['category'];
//        $article->title = $validatedData['title'];
//        $article->slug = $validatedData['slug'];
//        $article->content = $validatedData['content'];
//        $article->status = $request->input('status');
//        if ($article->status == 1) {
//            $article->order_number = $request->input('order_number') ?? 1;
//        } else {
//            $article->order_number = null;
//        }
//
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $imageName = $image->getClientOriginalName();
//            $image->move(public_path('uploads/images'), $imageName); // Lưu ảnh vào thư mục trên server
//            $article->image = '/uploads/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
//        }
//        $article->save();
//        $conditionView = 'index';
//        return redirect()->route('articles.index', ['conditionView' => $conditionView])->with('success', 'Thay đổi bài viết thành công !');
//    }

    public function destroy($id)
    {
        $article = User::findOrFail($id);
        $article->delete();
    }
}
