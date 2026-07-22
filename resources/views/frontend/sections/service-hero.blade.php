<section class="service-hero">

    <div class="container">

        <div class="service-hero-wrapper">

            <div class="service-hero-card {{ request()->routeIs('trademark-search') ? 'search-card' : '' }}">

                @if(request()->routeIs('trademark-search'))

                {{-- Trademark Search Page Content --}}
                @include('frontend.sections.trademark-search-box')

                @else

                {{-- Service Pages Content --}}
                <h2>Federal Trademark Registration</h2>

                <p class="service-hero-desc">
                    Protect your brand name, logo, or slogan nationwide with seamless, attorney-assisted USPTO filing.
                </p>

                <ul>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            USPTO Direct-Hit Database Search: Verify availability and catch conflicts early.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Custom Goods & Services Mapping: Precise legal classification for maximum protection.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Complete Application Processing: Full file preparation and official government submission.
                        </span>
                    </li>

                </ul>

                <a href="#" class="btn btn-outline">
                    Start Your Filing
                </a>

                @endif

            </div>

            <div class="service-hero-image">

                <img src="{{ asset('assets/images/services/service-banner.png') }}" alt="Trademark">

            </div>

        </div>

    </div>

</section>