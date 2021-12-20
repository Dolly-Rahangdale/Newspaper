<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getForm()
    { 
        $categories = Category::all();
        return view('admin.category');
    }
    public function submitForm(Request $request)
    {
        $category = new Category();
        $category->id = $request->id;
        $category->name = $request->name;
        $category->save();
        return redirect('/category/table');
    }
    public function getTable()
    {
        $data = Category::all();
        return view('admin.categorylist',compact('data'));
    }
    
}
