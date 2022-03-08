<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Bar;
use App\Models\Banner;
use App\Models\Drink;
use App\Models\Post;
use App\Models\SearchOption;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class PageController extends Controller
{
    public function index() {
        $search_options = SearchOption::all();
        $banners = Banner::where('status',1)->get();

        SEOMeta::setTitle('Dobrodošli');
        SEOMeta::setDescription('Sve što te je oduvek zanimalo o koktelima i barovima.');
        OpenGraph::setTitle('Dobrodošli');
        OpenGraph::setDescription('Sve što te je oduvek zanimalo o koktelima i barovima.');

        OpenGraph::addImage('http://kokteltest.000webhostapp.com/images/og-image.jpg', ['height' => 200, 'width' => 200]);
        
        return view('pages.home.home',[
            'search_options'=>$search_options,
            'banners'=>$banners,
            ]);
    }
    
    public function popular() {
        $popular = Drink::where('popular', 1)->get();

        SEOMeta::setTitle('Popularni kokteli');
        SEOMeta::setDescription('Bezvremenski klasici i trenutno najpopularniji kokteli u kojima ćeš sigurno uživati.');
        OpenGraph::setTitle('Popularni kokteli');
        OpenGraph::setDescription('Bezvremenski klasici i trenutno najpopularniji kokteli u kojima ćeš sigurno uživati.');
        OpenGraph::addImage('http://kokteltest.000webhostapp.com/images/og-image.jpg', ['height' => 200, 'width' => 200]);

        return view('pages.popular.popular',[
            'popular'=>$popular,
        ]);
    }
    
    public function bars() {
        $bars = Bar::all();

        SEOMeta::setTitle('Koktel barovi');
        SEOMeta::setDescription('Pronađite bar koji vam najviše odgovara i gde ćeš najviše uživati.');
        OpenGraph::setTitle('Koktel barovi');
        OpenGraph::setDescription('Pronađite bar koji vam najviše odgovara i gde ćeš najviše uživati.');
        OpenGraph::addImage('http://kokteltest.000webhostapp.com/images/og-image.jpg', ['height' => 200, 'width' => 200]);
        
        return view('pages.bars.bars',[
            'bars'=>$bars,
        ]);
    }
    public function singleCocktail($id) {
        $cocktail = Drink::find($id);

        SEOMeta::setTitle($cocktail->name);
        OpenGraph::setTitle($cocktail->name);
        OpenGraph::addImage('http://kokteltest.000webhostapp.com/images/'.$cocktail->image_path, ['height' => 200, 'width' => 200]);
       
        return view('pages.singleCocktail.singleCocktail',[
            'cocktail'=>$cocktail,
        ]);
    }

    public function terms() {  
        SEOMeta::setTitle('Politika privatnosti');
        OpenGraph::setTitle('Politika privatnosti');

        return view('pages.terms.terms');
    }
}