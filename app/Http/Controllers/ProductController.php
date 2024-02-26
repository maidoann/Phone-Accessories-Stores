<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\ProductDetail;
use App\Models\ProductFavorite;
use App\Models\ProductImage;
use Psy\Readline\Hoa\Console;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        $numberOfRecord = Product::count();
        $perPage = 3;
        $numberOfPage = $numberOfRecord % $perPage == 0 ?
            (int) $numberOfRecord / $perPage : (int) $numberOfRecord / $perPage + 1;
        $pageIndex = 1;
        if ($request->has('pageIndex'))
            $pageIndex = $request->input('pageIndex');
        if ($pageIndex < 1) $pageIndex = 1;
        if ($pageIndex > $numberOfPage) $pageIndex = $numberOfPage;
        $products = Product::orderBy('id', 'desc')->skip(($pageIndex - 1) * $perPage)
            ->take($perPage)->get();
        $topRatedProducts =  ProductComment::where('rating', 5)
            ->get();
        $categories = ProductCategory::all();
        $brands = Brand::all();
        return view('products.index', compact('products', 'categories', 'brands', 'topRatedProducts', 'pageIndex', 'numberOfPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }
   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
    $product = Product::with('productImage', 'productDetail', 'productComment')->findOrFail($id);
    $commentsPerPage = 3;
    $comments = $product->productComment()->paginate($commentsPerPage);
    $categoryId = $product->product_category_id;
    $relatedProducts = Product::where('product_category_id', $categoryId)
        ->where('id', '!=', $product->id)
        ->inRandomOrder()
        ->limit(3)
        ->get();
    
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (Auth::check()) {
        // Lấy ID của người dùng hiện tại
        $userId = Auth::id();
        // Kiểm tra xem người dùng đã từng mua sản phẩm này hay không
        $userBoughtProduct = $product->orders()->where('user_id', $userId)->exists();

    } else {
        // Nếu người dùng chưa đăng nhập, không cần kiểm tra
        $userBoughtProduct = false;

    }
    // Truyền dữ liệu vào view
    return view('products.show', compact('product', 'comments', 'relatedProducts', 'userBoughtProduct'));
}
    
     
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
