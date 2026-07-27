<section class="process">

    <div class="container">

        <div class="process-heading">

            <h2>{{ $processTitle ?? 'Why Register Your Trademark?' }}</h2>

            <p>{{ $processDescription ?? '' }}</p>

        </div>

        <div class="process-cards">

            @foreach($processCards ?? [] as $index => $card)

                <div class="process-card">

                    <div class="process-number">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>

                    <h3>{{ $card['title'] }}</h3>

                    <p>{{ $card['description'] }}</p>

                </div>

            @endforeach

        </div>

    </div>

</section>