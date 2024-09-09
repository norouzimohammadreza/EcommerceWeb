<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view ('admin.category.index',[
            'categories' => $categories
        ]);
    }
    public function create(){
        return view ('admin.category.create');
    }
    public function store(Request $request){
        $validation = Validator::make($request->all(),[
            'title'=>'required|min:3|unique:categories',
            'image' => 'required|max:512'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        $inputs = $validation->validated();
            $name = $inputs['title'] . '.' . $inputs['image']->extension();
            $inputs['image']->storeAs('category', $name);
            Category::create([
                'title' => $inputs['title'],
                'image' => $name
            ]);
            return redirect()->route('category.index');
    }
}
