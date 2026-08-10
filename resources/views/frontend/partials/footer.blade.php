<footer class="footer">

    <div class="container">

        <div class="footer-top">

            {{-- Left --}}

            <div class="footer-left">

                <h2 class="footer-title">
                    <a href="{{ route('home') }}" wire:navigate class="logo">
                        <img src="{{ asset('assets/images/home/usa-trademark-logo.png') }}" alt="USA Trademark Expert Logo">
                    </a>
                </h2>

                <div class="footer-divider"></div>

                <div class="footer-disclaimer">

                    <h4>
                        Disclaimer
                    </h4>

                    <!-- <p>The goal of USA Trademark Expert is to offer companies the most dependable,
                    efficient, and reasonably priced trademark protection services possible.
                    Our first priority is quality. Copyright 2025 USP of Trademarks, LLC.
                    Only software and information are offered by USA Trademark Expert.
                    USA Trademark Expert does not offer legal advice or take involved in any kind
                    of legal representation; it is not a "lawyer referral service".
                    Please refer to our Terms of Service and Privacy Policy before using
                    USA Trademark Expert. </p>-->
                    <p>
                        USA Trademark Expert is dedicated to providing businesses with dependable, efficient, and affordable trademark protection services where quality is our top priority. Please note that USA Trademark Expert offers software and informational tools only—we do not provide legal advice, engage in legal representation, or operate as a "lawyer referral service." Please review our <a href="{{ route('privacy-policy') }}?tab=terms-of-service" class="hover-link" wire:navigate>Terms of Service</a> and <a href="{{ route('privacy-policy') }}?tab=privacy-policy" class="hover-link" wire:navigate>Privacy Policy</a> before using our platform.
                    </p>

                </div>

                <div class="footer-contact">

                    <div class="footer-contact-item">

                        <h5>
                            Call Us
                        </h5>

                        <p>

                            <a href="tel:+16503840370" class="hover-link">
                                +1 (650) 384-0370
                            </a>

                            <span>
                                (Mon-Fri 9AM-5PM CST)
                            </span>

                        </p>

                    </div>

                    <div class="footer-contact-item">

                        <h5>
                            Email
                        </h5>

                        <p>

                            <a href="mailto:legal@usatrademarkexpert.com" class="hover-link">
                                legal@usatrademarkexpert.com
                            </a>

                        </p>

                    </div>

                </div>

            </div>

            {{-- Right --}}

            <div class="footer-right">

                <div class="footer-links">

                    <h4>
                        Quick Links
                    </h4>

                    <ul>

                        <li>
                            <a href="{{ route('home') }}" wire:navigate class="hover-link">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover-link">
                                Our Guarantee
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover-link">
                                Careers
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('privacy-policy') }}" wire:navigate class="hover-link">
                                Privacy Settings
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="footer-help">

                    <h4>
                        Any Questions?
                    </h4>

                    <p>

                        Use the
                        <a href="#">
                            Live Chat
                        </a>

                        for any<br> immediate assistance.

                    </p>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            © 2026 USA Trademark Expert.
            All rights reserved.
            Legal precision for intellectual property.

        </div>

    </div>

</footer>