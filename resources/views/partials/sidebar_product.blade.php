<aside class="widget widget-search">
    <form role="search" method="post" class="search-form  box-shadow" action="{{route('search')}}">
        @csrf
        <label>
            <span class="screen-reader-text">Search for:</span>
            <input type="search" class="input-text" placeholder="Ara …" value="" name="keyword">
        </label>
        <input type="submit" class="search-submit" value="Search">
    </form>
</aside>
<aside class="widget widget-Categories">
    <h3 class="widget-title">Kategoriler</h3>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{route('products_category', ['category'=>$category->slug])}}">{{$category->title}}</a></li>
        @endforeach
    </ul>
</aside>
<aside class="widget widget-recent-post">
    <h3 class="widget-title">Popüler Bloglar</h3>
    <ul class="ttm-recent-post-list">
        @foreach($popular_products as $product)
        <li class="ttm-recent-post-list-li clearfix">
            <a href="{{route('product_detail', ['category'=>$product->category->slug, 'slug'=>$product->slug])}}">
                <img class="img-fluid" src="{{Voyager::image($product->thumbnail('cropped'))}}" alt="product-img"></a>
            <span class="post-date">{{$product->created_at->format('d-m-Y')}}</span>
            <a href="{{route('product_detail', ['category'=>$product->category->slug, 'slug'=>$product->slug])}}">{{$product->title}}</a>
        </li>
        @endforeach
    </ul>
</aside>
