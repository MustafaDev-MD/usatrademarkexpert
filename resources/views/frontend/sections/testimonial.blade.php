<section class="testimonial">

    <div class="container">

        <div class="section-heading">

            <h2>{{ $testimonialTitle ?? 'Loved by Business Owners Across the Country' }}</h2>

        </div>

        <div class="swiper testimonialSwiper">

            <div class="swiper-wrapper">

                @foreach($testimonials ?? [] as $testimonial)

                    <div class="swiper-slide">

                        <div class="testimonial-card">

                            <div class="testimonial-stars">

                                @for($i = 1; $i <= ($testimonial['stars'] ?? 5); $i++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor

                            </div>

                            <p>
                                {{ $testimonial['review'] }}
                            </p>

                            <div class="testimonial-divider"></div>

                            <div class="testimonial-user">

                                <h4>- {{ $testimonial['name'] }}</h4>

                                <span>
                                    {{ $testimonial['designation'] }}
                                </span>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>