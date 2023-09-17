<!-- Sidebar -->
<aside class="col-md-3 sidebar">

    <div class="widget search">
        <form class="relative" action="{{ route('search_paper') }}" method="POST">
            <input type="search" name="search" class="searchbox mb-0" placeholder="Search">
            <button type="submit" class="search-button"><i class="ui-search"></i></button>
        </form>
    </div>

    <!-- Categories -->
    <div class="widget categories">
        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Categories</h3>
        <ul class="list-dividers">
            <li>
                <a href="#">Business</a>
            </li>
        </ul>
    </div>

    <!-- Recent posts -->
    <div class="widget recent-posts">
        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Recent Posts</h3>
        <div class="entry-list">
            <ul class="posts-list">
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry">
                            <h3 class="entry-title"><a href="blog-single.html">6 Ways to Be More
                                    Productive</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    19 Mar, 2016
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry">
                            <h3 class="entry-title"><a href="blog-single.html">3 Tips to Align Your
                                    Startup</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    16 Mar, 2016
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
                <li class="entry-li">
                    <article class="post-small clearfix">
                        <div class="entry">
                            <h3 class="entry-title"><a href="blog-single.html">Make more money blogging
                                    with these 6 tips</a></h3>
                            <ul class="entry-meta list-inline">
                                <li class="entry-date">
                                    16 Mar, 2016
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </div>
</aside> <!-- end sidebar -->