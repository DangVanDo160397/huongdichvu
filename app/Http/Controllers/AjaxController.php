<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class AjaxController extends Controller
{
    public function getCategory($category_parent_id) {
        $category = Category::where('category_parent_id',$category_parent_id)->get();
        foreach ($category as $ca) {
            echo "<option value='".$ca->category_id."'>".$ca->category_name."</option>";
        }
    }
}
