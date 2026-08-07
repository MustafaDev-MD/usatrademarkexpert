<section class="cta-banner {{ request()->routeIs('blog*') ? 'cta-banner-blog' : '' }} {{ request()->routeIs('about*') ? 'cta-banner-about' : '' }}">
    <div class="container">
        <div class="cta-banner-wrapper">
            <img src="{{ asset('assets/images/blog/cta-banner.png') }}"
                alt="Trademark Banner">

            <div class="cta-banner-overlay"></div>

            <div class="cta-banner-content">

                <span class="cta-banner-badge">
                    <i class="{{ $icon ?? 'fa-solid fa-link' }}"></i>
                    {{ $badge ?? 'BEST AND FAIR PRICING' }}
                </span>

                <h2>
                    {{ $title ?? 'Simple, Transparent Legal Pricing' }}
                </h2>

                <p>
                    {{ $description ?? 'Clear, upfront costs with no hidden fees. Choose the level of protection that fits your business needs.' }}
                </p>

                <div class="cta-banner-buttons">

                    <a href="{{ $primaryButtonUrl ?? '#' }}" class="btn btn-primary">
                        {{ $primaryButtonText ?? 'Get Started' }}
                    </a>

                    <a href="{{ $secondaryButtonUrl ?? '#' }}" class="btn btn-outline">
                        {{ $secondaryButtonText ?? 'Learn More' }}
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>