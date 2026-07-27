<section class="extension">

    <div class="container">

        <div class="extension-wrapper">

            <div class="extension-content">

                <h2>{{ $extensionTitle ?? 'Why Conduct a Trademark Search First?' }}</h2>

                <p class="extension-text">
                    {{ $extensionDescription ?? '' }}
                </p>

                <div class="extension-insight">

                    <span>{{ $extensionInsightTitle ?? 'KEY INSIGHT:' }}</span>

                    <p>
                        {{ $extensionInsight ?? '' }}
                    </p>

                </div>

                <div class="extension-buttons">

                    <a href="{{ $extensionPrimaryButtonLink ?? '#' }}" class="btn btn-primary">
                        {{ $extensionPrimaryButtonText ?? 'Get Started' }}
                    </a>

                    <a href="{{ $extensionSecondaryButtonLink ?? '#' }}" class="btn btn-outline">
                        {{ $extensionSecondaryButtonText ?? 'Learn More' }}
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
                @endif

            </div>

        </div>

    </div>

</section>