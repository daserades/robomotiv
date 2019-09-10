<?php

namespace App\Http\Controllers;

use App\Bcategory;
use App\Blog;
use App\Corporate;
use App\Slider;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use function foo\func;

class HomeCTRL extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        SEOMeta::setTitle('Anasayfa');
        SEOMeta::setDescription('Linmak Firması resmi web sitesi');

        return view('index', compact('sliders'));
    }

    public function corporate()
    {
        SEOMeta::setTitle('Kurumsal');
        $corporates = Corporate::orderBy('id', 'DESC')->get();
        return view('corporate', compact('corporates'));
    }


    public function blogs()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(6);
        $categories = Bcategory::all();
        return view('blogs', compact('blogs', 'categories'));
    }

    public function blogs_category($category)
    {
        $category = Bcategory::whereSlug($category)->firstOrFail();
        $blogs = Blog::with('category')->where('category_id', $category->id)->paginate(6);

        $categories = Bcategory::all();

        return view('blogs', compact('blogs', 'categories'));
    }

    public function blog_detail($category, $slug)
    {
        $category = Bcategory::whereSlug($category)->firstOrFail();
        $blog = Blog::with('category')->whereSlug($slug)->get();
        $categories = Bcategory::all();

        return view('blog_detail', compact('blog', 'categories'));
    }

    public function contact()
    {
        return view('contact');
    }
}
