<?php

namespace App\Http\Controllers;

use App\TblParent;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Product;
use App\Expert;
class PagesController extends Controller
{
    function __construct()
    {
    	View::share('article',Article::all());
    }
    public function index()
    {
//        $article_mp = TblParent::where('article_parent_id',1)->paginate(4);
        $product = Product::all()->take(4);
        $expert = Expert::all()->take(3);
    	return view('pages.index',compact('product','expert'));
    }
    public  function getMyPham() {
        $product = Product::all();
        return view('pages.mypham',compact('product'));
    }
    public  function getThoiTrang() {
        $product = Product::all();
        return view('pages.thoitrang',compact('product'));
    }
    public  function getTintuc() {
        return view('pages.tintuvan');
    }
    public function tintuc($id) {
        $article = Article::find($id);
       return view('pages/tintuc',compact('article'));

    }
    public function mypham($id) {
        $product = Product::find($id);
        return view('pages/hienthimp',compact('product'));

    }
}
