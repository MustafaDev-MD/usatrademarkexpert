<section class="service-hero">

    <div class="container">

        <div class="service-hero-wrapper">

            <div class="service-hero-card {{ request()->routeIs('trademark-search') ? 'search-card' : '' }}">

                @if(request()->routeIs('trademark-search'))

                {{-- Trademark Search Page Content --}}
                @include('frontend.sections.trademark-search-box')

                @else

                {{-- Service Pages Content --}}
                <h2>Bona Fide Use</h2>

                <p class="service-hero-desc">
                    Customer Trademark Classification:
                    Using the USPTO's ID manual,
                    our attorneys.
                </p>

                <ul>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Direct-Hit Search of the Federal USPTO Database
                            Ensure your.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Direct-Hit Search of the Federal USPTO Database
                            Ensure your.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Direct-Hit Search of the Federal USPTO Database
                            Ensure your.
                        </span>
                    </li>

                </ul>

                <a href="#" class="btn btn-outline">
                    Learn More
                </a>

                @endif

            </div>

            <div class="service-hero-image">

                <img src="{{ asset('assets/images/services/service-banner.png') }}" alt="Trademark">

            </div>

        </div>

    </div>

</section>