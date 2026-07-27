<section class="service-hero">

    <div class="container">

        <div class="service-hero-wrapper">

            <div class="service-hero-card {{ request()->route('slug') == 'trademark-search' ? 'search-card' : '' }}">

                @if(request()->route('slug') == 'trademark-search')

                    @include('frontend.sections.trademark-search-box')

                @else

                    <h2>{{ $heroTitle ?? 'Federal Trademark Registration' }}</h2>

                    <p class="service-hero-desc">
                        {{ $heroDescription ?? '' }}
                    </p>

                    @if(!empty($heroFeatures))
                        <ul>
                            @foreach($heroFeatures as $feature)
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <a href="{{ $heroButtonLink ?? '#' }}" class="btn btn-outline">
                        {{ $heroButtonText ?? 'Start Your Filing' }}
                    </a>

                @endif

            </div>

            <div class="service-hero-image">
                <img src="{{ $heroImage ?? asset('assets/images/services/service-banner.png') }}"
                     alt="{{ $heroTitle ?? 'Trademark' }}">
            </div>

        </div>

    </div>

</section>