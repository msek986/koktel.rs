<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Post;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class BlogController extends Controller
{
    public function blog() {
        $banners = Banner::where('status',1)->get();
        $posts = Post::where('status',1)->latest('created_at')->paginate(6);
        $popularPosts = Post::where('popular',1)->get();

        SEOMeta::setTitle('Blog');
    
        return view('pages.blog.blog',[
            'banners'=>$banners,
            'posts'=>$posts,
            'popularPosts'=>$popularPosts,
        ]);
    }

    public function searchPost($name) {
        $banners = Banner::where('status',1)->get();
        $popularPosts = Post::where('popular',1)->get();
        $posts = Post::where('status',1)->where('search_tags','like', '%'.$name.'%')->paginate(6);

        SEOMeta::setTitle('Blog');

        return view('pages.blog.blog',[
            'banners'=>$banners,
            'posts'=>$posts,
            'popularPosts'=>$popularPosts,
        ]);
    }

    public function singlePost($slug) {
        $banners = Banner::where('status',1)->get();
        $singlePost = Post::where('slug',$slug)->first();
        $posts = Post::where('status',1)->get();
        $popularPosts = Post::where('popular',1)->get();

        SEOMeta::setTitle($singlePost->title);

        return view('pages.singlePost.singlePost',[
            'banners'=>$banners,
            'singlePost'=>$singlePost,
            'posts'=>$posts,
            'popularPosts'=>$popularPosts,
        ]);
    }
}
