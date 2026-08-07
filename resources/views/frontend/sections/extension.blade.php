<section class="extension">

    <div class="container">

        <div class="extension-wrapper">

            <div class="extension-content">

                <h2>{{ $extensionTitle ?? 'Protecting What You Build' }}</h2>

                <p class="extension-text">
                    {{ $extensionDescription ?? 'We simplify complex intellectual property laws so you can scale with confidence. From clearance searches to final registration, we keep your brand secure every step of the way.' }}
                </p>

                <div class="extension-insight">

                    <span>{{ $extensionInsightTitle ?? 'OUR APPROACH:' }}</span>

                    <p>
                        {{ $extensionInsight ?? 'Proactive clearance audits and expert USPTO filings—stopping legal conflicts before they happen.' }}
                    </p>

                </div>

                <div class="extension-buttons">

                    <a href="{{ $extensionPrimaryButtonLink ?? '#' }}" class="btn btn-primary">
                        {{ $extensionPrimaryButtonText ?? 'Partner With Us' }}
                    </a>

                    <a href="{{ $extensionSecondaryButtonLink ?? '#' }}" class="btn btn-outline">
                        {{ $extensionSecondaryButtonText ?? 'Our Services' }}
                    </a>

                </div>

            </div>

            <div class="extension-image">

                <img src="{{ $extensionImage ?? asset('assets/images/services/extension.png') }}"
                    alt="{{ $extensionTitle ?? 'Extension' }}">

                @if(!empty($extensionCards))
                <div class="extension-cards">

                    @foreach($extensionCards as $card)

                    <div class="extension-card">

                        <div class="extension-card-icon">
                            <i class="{{ $card['icon'] }}"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>{{ $card['title'] }}</h5>
                        </div>

                    </div>

                    @endforeach

                </div>
                @else
                <div class="extension-cards">

                    <div class="extension-card">

                        <div class="extension-card-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>USPTO Compliance</h5>
                        </div>

                    </div>

                    <div class="extension-card">

                        <div class="extension-card-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>Thorough Clearance</h5>
                        </div>

                    </div>

                    <div class="extension-card"> 

                        <div class="extension-card-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>Brand Security</h5>
                        </div>

                    </div>

                </div>
                @endif

            </div>

        </div>

    </div>

</section>