<?php

namespace App\Http\Controllers;

use App\Bcategory;
use App\Blog;
use App\Bulten;
use App\Corporate;
use App\Information;
use App\Mail\Iletisim;
use App\Pcategory;
use App\Product;
use App\Project;
use App\Service;
use App\Slider;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use TCG\Voyager\Models\Category;
use function foo\func;

class HomeCTRL extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->get();
        $projects = Project::limit(6)->orderBy('id', 'DESC')->get();
        $blogs = Blog::limit(4)->orderBy('id', 'DESC')->get();
        $products = Product::limit(4)->orderBy('id', 'DESC')->get();
        $services = Service::limit(3)->orderBy('id', 'DESC')->get();
        SEOMeta::setTitle('Anasayfa');
        SEOMeta::setDescription('Robomotiv Firması resmi web sitesi');

        return view('index', compact('sliders', 'projects', 'blogs', 'products', 'services'));
    }

    public function corporate()
    {
        SEOMeta::setTitle('Kurumsal');
        SEOMeta::setDescription('Robomotiv Firması resmi web sitesi');
        $corporates = Corporate::orderBy('id', 'DESC')->get();
        return view('corporate', compact('corporates'));
    }

    public function products()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(8);
        $categories = Pcategory::all();

        SEOMeta::setTitle('Ürünler');
        SEOMeta::setDescription('Ürünler hakkında bilgi almak için email ve telefon adreslerinden firmamız ile iletişime geçebilirsiniz.');

        return view('products', compact('products', 'categories'));
    }

    public function products_category($category)
    {
        $category = Pcategory::whereSlug($category)->firstOrFail();

        $products = Product::with('category')->where('category_id', $category->id)->orderBy('id', 'DESC')->paginate(8);

        SEOMeta::setTitle($category->title);
        SEOMeta::setDescription($category->title." - kategorisindeki ürünler.");

        $categories = Pcategory::all();
        return view('products', compact('products', 'categories', 'category'));
    }

    public function product_detail($category, $slug)
    {
        $category = Pcategory::whereSlug($category)->firstOrFail();
        $product = Product::with('category')->where('category_id', $category->id)->whereSlug($slug)->firstOrFail();
        $product_property = Information::where('product_id', $product->id)->get();
        $categories = Pcategory::all();
        $product->visit();

        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription(substr(strip_tags($product->sort_description), 0, 150));

        return view('product_detail', compact('product', 'categories', 'product_property'));
    }

    public function services()
    {
        $services = Service::orderBy('id', 'DESC')->paginate(9);

        SEOMeta::setTitle('Hizmetler');
        SEOMeta::setDescription('Robomotiv Firmamızın müşterilerimize vermiş olduğu hizmetler.');

        return view('services', compact('services'));
    }

    public function service_detail($slug)
    {
        $service = Service::whereSlug($slug)->firstOrFail();

        SEOMeta::setTitle($service->title);
        SEOMeta::setDescription(substr(strip_tags($service->content), 0, 150));

        return view('service_detail', compact('service'));
    }

    public function projects()
    {
        $projects = Project::orderBy('id', 'DESC')->paginate(9);

        SEOMeta::setTitle('Projeler');
        SEOMeta::setDescription('Robomotiv firmamızın yapmış olduğu projeler');

        return view('projects', compact('projects'));
    }

    public function project_detail($slug)
    {
        $project = Project::whereSlug($slug)->firstOrFail();
        $projects = Project::where('id', '!=', $project->id)->inRandomOrder()->limit(3)->get();

        SEOMeta::setTitle($project->title);
        SEOMeta::setDescription(substr(strip_tags($project->summery), 0, 150));

        return view('project_detail', compact('project', 'projects'));
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(4);
        $categories = Bcategory::all();

        SEOMeta::setTitle('Bloglar');
        SEOMeta::setDescription('Robomotiv Firmamıza ait bloglar');

        return view('blogs', compact('blogs', 'categories'));
    }

    public function blogs_category($category)
    {
        $category = Bcategory::whereSlug($category)->firstOrFail();
        $blogs = Blog::with('category')->where('category_id', $category->id)->orderBy('id', 'DESC')->paginate(4);

        $categories = Bcategory::all();

        SEOMeta::setTitle($category->title);
        SEOMeta::setDescription($category->title.' - kategorisindeki bloglar');

        return view('blogs', compact('blogs', 'categories', 'category'));
    }

    public function blog_detail($category, $slug)
    {
        $category = Bcategory::whereSlug($category)->firstOrFail();
        $blog = Blog::with('category')->where('category_id', $category->id)->whereSlug($slug)->firstOrFail();
        $categories = Bcategory::all();
        $blog->visit();

        SEOMeta::setTitle($blog->title);
        SEOMeta::setDescription(substr(strip_tags($blog->content), 0, 150));

        return view('blog_detail', compact('blog', 'categories'));
    }

    public function contact()
    {
        SEOMeta::setTitle('İletişim');
        SEOMeta::setDescription('İletişim bölümünden firmamızla iletişime geçebilir teknik destek talebi oluşturabilir ve diğer konular hakkında bilgi alabilirsiniz.');

        return view('contact');
    }

    public function contact_post(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'mail' => 'required',
        'gsm' => 'required',
        'city' => 'required',
        'message' => 'required',
    ]);
        //burası iletisim
        // burası master
        Mail::to(setting('iletisim.email'))->send(new Iletisim($request));


        return view('success')
            ->with('title', 'Mail Gönderildi')
            ->with('message', 'Girmiş olduğunuz bilgiler başarılı bir şekilde firmamıza ulaşmıştır. Gerek görüldüğü takdirde size geridönüş yapılacaktır. ');
    }

    public function bulten_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:bultens'
        ]);

        if ($validator->fails()) {
            return view('fail')->with('title', 'Kayıt İşlemi Başarısız')->with('message', 'Bu e-posta adresi ile daha önceden kayıt işlemi yapılmış.');
        }

        Bulten::create([
            'email' => $request->email,
            'ip_address' => $request->ip()
        ]);

        return view('success')
            ->with('title', 'Kayıt İşlemi Başarılı')
            ->with('message', 'E-Posta adresiniz bültenimize kaydedildi.');
    }

    public function bulten_get()
    {
        return view('search_error');
    }

    public function search_get()
    {
        return view('search_error');
    }

    public function search(Request $request)
    {
        $request->validate([
            'keyword' => 'required'
        ]);
        $keyword = $request->get('keyword');
        $services = Service::where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content', 'LIKE', '%' .  $keyword . '%')
            ->get();
        $blogs = Blog::with('category')->where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content', 'LIKE', '%' . $keyword . '%')
            ->get();
        $projects = Project::where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('summery', 'LIKE', '%' . $keyword . '%')
            ->orWhere('mission', 'LIKE', '%' . $keyword . '%')
            ->get();
        $products = Product::where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('sort_description', 'LIKE', '%' . $keyword . '%')
            ->orWhere('long_description', 'LIKE', '%' . $keyword .'%')
            ->get();
        return view('search_result', compact('services', 'projects', 'blogs', 'products'));
    }
}
