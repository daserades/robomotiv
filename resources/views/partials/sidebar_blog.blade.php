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
            <li><a href="{{route('blogs_category', ['category'=>$category->slug])}}">{{$category->title}}</a></li>
        @endforeach
    </ul>
</aside>
<aside class="widget widget-recent-post">
    <h3 class="widget-title">Popüler Bloglar</h3>
    <ul class="ttm-recent-post-list">
        @foreach($popular_posts as $post)
        <li class="ttm-recent-post-list-li clearfix">
            <a href="{{route('blog_detail', ['category'=>$post->category->slug, 'slug'=>$post->slug])}}"><img class="img-fluid" src="{{Voyager::image($post->thumbnail('cropped'))}}" alt="blog-img"></a>
            <span class="post-date">{{$post->created_at->format('d-m-Y')}}</span>
            <a href="{{route('blog_detail', ['category'=>$post->category->slug, 'slug'=>$post->slug])}}">{{$post->title}}</a>
        </li>
        @endforeach
    </ul>
</aside>
