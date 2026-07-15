<section class="cta-banner {{ request()->routeIs('blog*') ? 'cta-banner-blog' : '' }} {{ request()->routeIs('about*') ? 'cta-banner-about' : '' }}">
    <div class="container">
        <div class="cta-banner-wrapper">
            <img src="{{ asset('assets/images/blog/cta-banner.png') }}"
                 alt="Trademark Banner">

            <div class="cta-banner-overlay"></div>

            <div class="cta-banner-content">

                <span class="cta-banner-badge">
                    <i class="fa-solid fa-link"></i>
                    BEST AND FAIR PRICING
                </span>

                <h2>
                    Simple, Transparent Legal Pricing
                </h2>

                <p>
                    Clear, upfront costs with no hidden fees.
                    Choose the level of protection that fits
                    your business needs.
                </p>

                <div class="cta-banner-buttons">
                    <a href="#" class="btn btn-primary">
                        Get Started
                    </a>

                    <a href="#" class="btn btn-outline">
                        Learn More
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>