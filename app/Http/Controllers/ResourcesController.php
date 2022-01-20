<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourcesController extends Controller
{
    // Affiche le template Index avec les 20 premières "Resources" de la DB
    public function index() {
        $resources = Resource::orderBy('created_at', 'desc')
                     ->take(20)
                     ->get();
        return view('resources.index', compact('resources'));
    }
    
    // Affiche le template Index_Resources avec le contenu d'une seule "Resource" de la DB
    public function show(Resource $resource) {
        return view('resources.show', compact('resource'));
    }

    // Affiche 4 "Resources" supplémentaires dans le template _boucle (qui se trouve dans Index)
    public function more(Request $request) {
        $resources = Resource::orderBy('created_at', 'desc')
                     ->take(4)
                     ->offset($request->offset)
                     ->get();
        return view('resources._boucle', compact('resources'));
    }
}