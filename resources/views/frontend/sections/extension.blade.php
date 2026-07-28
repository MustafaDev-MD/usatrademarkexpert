<section class="extension">

    <div class="container">

        <div class="extension-wrapper">

            <div class="extension-content">

                <h2>{{ $extensionTitle ?? 'Why Request an Extension?' }}</h2>

                <p class="extension-text">
                    {{ $extensionDescription ?? 'If you filed under an "Intent to Use" basis, you must eventually submit a Statement of Use (SOU) proving you are actively using the trademark in commerce. If you are not ready within the initial 6-month window after the Notice of Allowance is issued, an extension grants you an additional 6 months to avoid abandonment.' }}
                </p>

                <div class="extension-insight">

                    <span>{{ $extensionInsightTitle ?? 'KEY INSIGHT:' }}</span>

                    <p>
                        {{ $extensionInsight ?? 'By clicking submit, you state under penalty of perjury that you have a good faith belief that the use of the material in the manner complained of is not authorized, the material in the manner complained of is not authorized.' }}
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
                @else
                <div class="extension-cards">

                    <div class="extension-card">

                        <div class="extension-card-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>Filing Extension</h5>
                        </div>

                    </div>

                    <div class="extension-card">

                        <div class="extension-card-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>Filing Extension</h5>
                        </div>

                    </div>

                    <div class="extension-card">

                        <div class="extension-card-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>

                        <div class="extension-card-content">
                            <h5>Filing Extension</h5>
                        </div>

                    </div>

                </div>
                @endif

            </div>

        </div>

    </div>

</section>