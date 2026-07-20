<section class="pricing">

    <div class="container">

        <div class="section-heading">

            <h2>{{ $pricingTitle }}</h2>
            <p>
                {{ $pricingDescription }}
            </p>

        </div>

        <div class="pricing-wrapper">

            @foreach($pricingPackages as $package)
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

                <a href="#"
                    class="pricing-btn {{ $package['active'] ? 'pricing-btn-active' : '' }}">
                    {{ $package['button'] }}
                </a>

            </div>
            @endforeach

            {{-- Card 1 --}}

            <!-- <div class="pricing-card">

                <h3>Basic Package</h3>
                <div class="pricing-price">

                    <span class="price">$49</span>
                    <span class="fees">
                        + applicable fees
                    </span>

                </div>

                <p class="pricing-desc">
                    Essential filing services for straightforward trademark applications.
                </p>

                <span class="pricing-label">
                    includes:
                </span>

                <ul>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Direct-Hit Search of the Federal USPTO Database:
                            Ensure your trademark is unique and available.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Customer Trademark Classification:
                            Using the USPTO’s ID manual, our attorneys will devise a class and description of goods and services that best matches what you seek to protect with your trademark registration.
                        </span>
                    </li>

                </ul>

                <a href="#" class="pricing-btn">
                    Select Basic
                </a>

            </div> -->

            {{-- Card 2 --}}

            <!-- <div class="pricing-card active">

                <span class="pricing-badge">

                    <i class="fa-solid fa-comments-dollar"></i>
                    Continuous Protection

                </span>

                <h3>Standard Package</h3>

                <div class="pricing-price">

                    <span class="price">$299</span>
                    <span class="fees">
                        + applicable fees
                    </span>

                </div>

                <p class="pricing-desc">
                    Essential filing services for straightforward trademark applications.
                </p>

                <span class="pricing-label">
                    includes:
                </span>

                <ul>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            One-on-One Consultation with a Trademark Lawyer:
                            15-minute session to address your specific needs.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Cease and Desist Letter:
                            Take action against potential infringements
                        </span>
                    </li>

                </ul>

                <a href="#" class="pricing-btn pricing-btn-active">
                    Select Basic
                </a>

            </div> -->

            {{-- Card 3 --}}

            <!-- <div class="pricing-card">

                <h3>Premium Package</h3>

                <div class="pricing-price">

                    <span class="price">$539</span>
                    <span class="fees">
                        + applicable fees
                    </span>

                </div>

                <p class="pricing-desc">
                    Essential filing services for straightforward trademark applications.
                </p>

                <span class="pricing-label">
                    includes:
                </span>

                <ul>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            One-on-One Consultation with a Trademark Lawyer:
                            Extended 1-hour session for in-depth assistance.
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Rush Processing:
                            Priority 48-hour processing
                        </span>
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Trademark Monitoring infringement alerts (free trial*)
                        </span>
                    </li>

                </ul>

                <a href="#" class="pricing-btn">
                    Select Basic
                </a>

            </div> -->

        </div>

    </div>

</section>