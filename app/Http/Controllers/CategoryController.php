<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function indexCategory()
    {
        $category = Category::all();
        return view('Admin.category.indexCategory', compact('category'));
    }

    public function createCategory(Request $request)
    {
        Category::create([
            'category' => $request->category,
            'slug' => Str::slug($request->category),
        ]);

        return redirect()->back()->with('success', "Data $request->category Berhasil Ditambahkan !");
    }

    public function updateCategory(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->update([
            'category' => $request->category,
            'slug' => Str::slug($request->category)
        ]);

        return redirect()->back()->with('success', "Data $request->category Berhasil Diupdate !");
    }

    public function deleteCategory(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->delete();
        return redirect()->back()->with('Delete', "Data $request->category Berhasil Dihapus !");
    }
}
