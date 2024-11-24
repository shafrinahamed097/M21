<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function CategoryPage(){
        return view('pages.category.category-page');
    }
    function CategoryCreate(Request $request){
        $user_id=$request->header('id');

       
        
        return Category::create([
            'name'=>$request->input('name'),
            'user_id'=>$user_id
        ]);

    }
}
