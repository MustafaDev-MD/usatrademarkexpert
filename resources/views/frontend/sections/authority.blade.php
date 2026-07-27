<section class="authority">

    <div class="container">

        <div class="section-heading">

            <h2>{{ $authorityTitle ?? 'Name vs. Logo: What Should You Protect?' }}</h2>

        </div>

        <div class="authority-grid">

            <div class="authority-card authority-left">

                <div class="authority-icon">
                    <i class="{{ $authorityLeftIcon ?? 'fa-regular fa-file-lines' }}"></i>
                </div>

                <h3>{{ $authorityLeftTitle ?? '' }}</h3>

                @if(!empty($authorityLeftItems))
                    <ul>
                        @foreach($authorityLeftItems as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

            <div class="authority-card authority-right">

                <h3>{{ $authorityRightTitle ?? '' }}</h3>

                <p>
                    {{ $authorityRightDescription ?? '' }}
                </p>

            </div>

        </div>

    </div>

</section>