<section class="pricing">

    <div class="container">

        <div class="section-heading">

            <h2>{{ $pricingTitle ?? '' }}</h2>
            <p>
                {{ $pricingDescription ?? '' }}
            </p>

        </div>

        <div class="pricing-wrapper">

            @foreach($pricingPackages ?? [] as $package)
            <div class="pricing-card {{ $package['active'] ? 'active' : '' }}">

                @if($package['active'])
                <span class="pricing-badge">
                    <i class="fa-solid fa-comments-dollar"></i>
                    {{ $package['badge'] }}
                </span>
                @endif

                <h3>{{ $package['title'] }}</h3>

                <div class="pricing-price">
                    <span class="price">${{ $package['price'] }}</span>
                    <span class="fees">+ applicable fees</span>
                </div>

                <p class="pricing-desc">{{ $package['description'] }}</p>

                <ul>
                    @foreach($package['features'] as $feature)
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ $package['link'] ?? '#' }}"
                    class="pricing-btn {{ !empty($package['active']) ? 'pricing-btn-active' : '' }}">
                    {{ $package['button'] }}
                </a>

            </div>
            @endforeach

            
        </div>
        
    </div>
    
</section>