<?php

namespace App\Http\Controllers;

use App\Bcategory;
use App\Blog;
use App\Corporate;
use App\Project;
use App\Service;
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

    public function products()
    {
        return view('products');
    }

    public function products_category($category)
    {
        return view('products');
    }

    public function product_detail($category, $slug)
    {
        return view('project_detail');
    }

    public function services()
    {
        $services = Service::orderBy('id', 'DESC')->get();
        return view('services', compact('services'));
    }

    public function service_detail($slug)
    {
        $service = Service::whereSlug($slug)->firstOrFail();
        $services = Service::limit(6)->orderBy('created_at', 'DESC')->get();
        return view('service_detail', compact('service', 'services'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function project_detail($slug)
    {
        $project = Project::whereSlug($slug)->firstOrFail();
        $projects = Project::where('id', '!=', $project->id)->inRandomOrder()->limit(2)->get();


        return view('project_detail', compact('project', 'projects'));
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
        $blogs = Blog::with('category')->where('category_id', $category->id)->orderBy('id', 'DESC')->paginate(6);

        $categories = Bcategory::all();

        return view('blogs', compact('blogs', 'categories', 'category'));
    }

    public function blog_detail($category, $slug)
    {
        $category = Bcategory::whereSlug($category)->firstOrFail();
        $blog = Blog::with('category')->where('category_id', $category->id)->whereSlug($slug)->firstOrFail();
        $categories = Bcategory::all();

        return view('blog_detail', compact('blog', 'categories'));
    }

    public function contact()
    {
        return view('contact');
    }
}
