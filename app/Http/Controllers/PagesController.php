<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    function __construct()
    {
    	View::share('article',Article::all() );
    }
    public function index()
    {
    	return view('pages.index');
    }
}
