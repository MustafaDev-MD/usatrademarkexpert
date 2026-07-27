<section class="contact-faq-section faq-section {{ request()->routeIs('contact') ? 'contact-faq-bg' : 'default-faq-bg' }}">

    <div class="container">

        <div class="process-heading">
            <h2>{{ $faqTitle ?? 'Frequently Asked Questions' }}</h2>
        </div>

        <div class="faq-content active">
            <div class="faq-list">

                @foreach($faqs ?? [] as $index => $faq)

                    <div class="faq-item {{ $index == 0 ? 'active' : '' }}">

                        <button class="faq-question">
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