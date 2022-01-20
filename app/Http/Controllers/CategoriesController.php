<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    // Affiche le template Index avec toutes les "Resources" de cette catégorie
    public function show(Category $category) {
        return view('categories.show', compact('category'));
    }
}
