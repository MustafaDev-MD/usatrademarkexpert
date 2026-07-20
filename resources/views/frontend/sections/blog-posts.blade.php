@props([
'showFilter' => true,
'title' => null,
])

<section class="blog-posts">

    <div class="container">

        <!-- Filter -->

        @if($showFilter)

        <!-- Filter -->
        <div class="blog-filter">

            <div class="blog-categories">
                <button class="active">Services</button>
                <button>Services</button>
                <button>Services</button>
                <button>Services</button>
            </div>

            <div class="blog-search">
                <input
                    type="search"
                    id="blog-search"
                    name="search"
                    placeholder="Search articles..."
                    autocomplete="off">

                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>

        </div>

        @else

        @if($title)
        <div class="section-heading text-center">
            <h2>{{ $title }}</h2>
        </div>
        @endif

        @endif

        <div class="blog-grid">

            <!-- Card -->
            <article>

                <a href="{{ route('single-blog') }}" class="blog-card">

                    <img src="{{ asset('assets/images/blog/blog-card.png') }}" alt="">

                    <div class="blog-card-content">

                        <span>Trademark</span>

                        <h3>Lorem ipsum dolor sit amet.</h3>

                        <p>
                            Lorem ipsum dolor sit amet,
                            consect adipiscing elit,
                            sed diam nonummy nibh euismod magna.
                        </p>

                    </div>

                </a>

            </article>

            <article>

                <a href="{{ route('single-blog') }}" class="blog-card">

                    <img src="{{ asset('assets/images/blog/blog-card.png') }}" alt="">

                    <div class="blog-card-content">

                        <span>Trademark</span>

                        <h3>Lorem ipsum dolor sit amet.</h3>

                        <p>
                            Lorem ipsum dolor sit amet,
                            consect adipiscing elit,
                            sed diam nonummy nibh euismod magna.
                        </p>

                    </div>

                </a>

            </article>

            <article>

                <a href="{{ route('single-blog') }}" class="blog-card">

                    <img src="{{ asset('assets/images/blog/blog-card.png') }}" alt="">

                    <div class="blog-card-content">

                        <span>Trademark</span>

                        <h3>Lorem ipsum dolor sit amet.</h3>

                        <p>
                            Lorem ipsum dolor sit amet,
                            consect adipiscing elit,
                            sed diam nonummy nibh euismod magna.
                        </p>

                    </div>

                </a>

            </article>

            <!-- Repeat -->
        </div>

    </div>

</section>