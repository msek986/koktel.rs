<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Drink;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class SearchController extends Controller
{
    public function search(Request $req) {
        $banners = Banner::where('status',1)->get();
        $drinks = Drink::where('search_tags','like', '%'.$req->input('query').'%')->paginate(12);
        $drinks->appends($req->all());

        SEOMeta::setTitle('Pretraga koktela');
        SEOMeta::setDescription('Pronađi koktel koji će ti se svideti i u kom ćeš uživati. Pretraži koktele po nazivu, vrsti pića ili bilo kom drugom sastojku.');
        OpenGraph::setTitle('Pretraga koktela');
        OpenGraph::setDescription('Pronađi koktel koji će ti se svideti i u kom ćeš uživati. Pretraži koktele po nazivu, vrsti pića ili bilo kom drugom sastojku.');
        
        return view('pages.search.search',[
            'drinks'=>$drinks,
            'banners'=>$banners,
            ]);
    }

    public function searchAlcohol($name) {
        $banners = Banner::where('status',1)->get();
        $drinks = Drink::where('search_tags','like', '%'.$name.'%')
        ->paginate(12);

        SEOMeta::setTitle('Pretraga koktela');
        SEOMeta::setDescription('Pronađi koktel u kom ćeš uživati. Pretraži koktele po nazivu, vrsti pića ili bilo kom drugom sastojku.');
        OpenGraph::setTitle('Pretraga koktela');
        OpenGraph::setDescription('Pronađi koktel u kom ćeš uživati. Pretraži koktele po nazivu, vrsti pića ili bilo kom drugom sastojku.');

        return view('pages.search.search',[
            'drinks'=>$drinks,
            'banners'=>$banners,
        ]);
    }
}
