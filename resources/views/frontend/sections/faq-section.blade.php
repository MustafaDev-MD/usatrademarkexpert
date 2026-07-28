<section class="faq-section">

    <div class="container">

        <div class="faq-tabs">

            <button class="faq-tab hover-link active" data-tab="trademark">
                Trademark FAQs
            </button>

            <button class="faq-tab hover-link" data-tab="copyright">
                Copyright FAQs
            </button>

        </div>

        {{-- Trademark --}}
        <div class="faq-content active" id="trademark">

            <div class="faq-list">

                @foreach($trademarkFaqs as $index => $faq)

                    <div class="faq-item {{ $index == 0 ? 'active' : '' }}">

                        <button class="faq-question" type="button">

                            <span>{{ $faq['question'] }}</span>

                            <span class="faq-icon"></span>

                        </button>

                        <div class="faq-answer">

                            {!! $faq['answer'] !!}

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        {{-- Copyright --}}
        <div class="faq-content" id="copyright">

            <div class="faq-list">

                @foreach($copyrightFaqs as $index => $faq)

                    <div class="faq-item {{ $index == 0 ? 'active' : '' }}">

                        <button class="faq-question" type="button">

                            <span>{{ $faq['question'] }}</span>

                            <span class="faq-icon"></span>

                        </button>

                        <div class="faq-answer">

                            {!! $faq['answer'] !!}

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>