<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryContorller extends Controller
{
   public function show(Category $category)
   {

       return view('category.show',compact('category'));
   }
}