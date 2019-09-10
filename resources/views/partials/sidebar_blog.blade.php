<aside class="widget widget-search">
    <form role="search" method="get" class="search-form  box-shadow" action="#">
        <label>
            <span class="screen-reader-text">Search for:</span>
            <input type="search" class="input-text" placeholder="Search …" value="" name="s">
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
        <li class="ttm-recent-post-list-li clearfix">
            <a href="single-blog.html"><img class="img-fluid" src="{{asset('images/portfolio/post-three-1200x800.jpg')}}" alt="blog-img"></a>
            <span class="post-date">January 16, 2019</span>
            <a href="single-blog.html">Equipping Researchers in the Developing.</a>
        </li>
        <li class="ttm-recent-post-list-li clearfix">
            <a href="single-blog.html"><img class="img-fluid" src="{{asset('images/portfolio/post-four-1200x800.jpg')}}" alt="blog-img"></a>
            <span class="post-date">February 5, 2019</span>
            <a href="single-blog.html">Simple Steps for Replacing old Tiling</a>
        </li>
        <li class="ttm-recent-post-list-li clearfix">
            <a href="single-blog.html"><img class="img-fluid" src="{{asset('images/portfolio/post-five-1200x800.jpg')}}" alt="blog-img"></a>
            <span class="post-date">January 31, 2019</span>
            <a href="single-blog.html">Danger of Having High Water Pressure</a>
        </li>
    </ul>
</aside>
