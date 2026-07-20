<header class="header">

    <div class="container">

        <div class="navbar">

            <div class="navbar-left">
                <a href="{{ route('home') }}" wire:navigate class="logo">
                    <img src="{{ asset('assets/images/home/usa-trademark-logo.png') }}" alt="USA Trademark Expert Logo">
                </a>
            </div>

            <div class="navbar-center">

                <nav class="nav-menu">

                    <ul>

                        <li class="has-mega-menu">

                            <span
                                class="mega-trigger {{ request()->is('services*') ? 'active' : '' }}"
                                wire:navigate>
                                Services
                                <i class="fa-solid fa-angle-down"></i>
                            </span>

                            <div class="mega-menu">

                                <div class="mega-menu-grid">

                                    <a href="{{ route('trademark-registration') }}"
                                        class="{{ request()->routeIs('trademark-registration') ? 'active' : '' }}"
                                        wire:navigate>
                                        Trademark Registration
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('comprehensive-trademark-search') }}"
                                        class="{{ request()->routeIs('comprehensive-trademark-search') ? 'active' : '' }}"
                                        wire:navigate>
                                        Comprehensive Trademark Search
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('trademark-monitoring') }}"
                                        class="{{ request()->routeIs('trademark-monitoring') ? 'active' : '' }}"
                                        wire:navigate>
                                        Trademark Monitoring
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('trademark-search') }}"
                                        class="{{ request()->routeIs('trademark-search') ? 'active' : '' }}"
                                        wire:navigate>
                                        Free Trademark Search
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('trademark-renewal') }}"
                                        class="{{ request()->routeIs('trademark-renewal') ? 'active' : '' }}"
                                        wire:navigate>
                                        Trademark Renewal
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('office-action-response') }}"
                                        class="{{ request()->routeIs('office-action-response') ? 'active' : '' }}"
                                        wire:navigate>
                                        Office Action Response
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('statement-of-use') }}"
                                        class="{{ request()->routeIs('statement-of-use') ? 'active' : '' }}"
                                        wire:navigate>
                                        Statement of Use
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('filing-an-extension') }}"
                                        class="{{ request()->routeIs('filing-an-extension') ? 'active' : '' }}"
                                        wire:navigate>
                                        Filing an Extension
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('copyright-registration') }}"
                                        class="{{ request()->routeIs('copyright-registration') ? 'active' : '' }}"
                                        wire:navigate>
                                        Copyright Registration
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('dmca-takedown') }}"
                                        class="{{ request()->routeIs('dmca-takedown') ? 'active' : '' }}"
                                        wire:navigate>
                                        DMCA Takedown
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        </li>

                        <!-- <li>
                            <a href="{{ route('our-team') }}"
                                class="{{ request()->routeIs('our-team*') ? 'active' : '' }}"
                                wire:navigate>
                                Our Team
                            </a>
                        </li> -->

                        <li class="has-mega-menu">

                            <span
                                class="mega-trigger {{ request()->routeIs('faqs', 'blog') ? 'active' : '' }}">
                                Resources
                                <i class="fa-solid fa-angle-down"></i>
                            </span>

                            <div class="mega-menu mega-menu-small">

                                <div class="mega-menu-grid">

                                    <a href="{{ route('faqs') }}"
                                        class="{{ request()->routeIs('faqs') ? 'active' : '' }}"
                                        wire:navigate>
                                        FAQs
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('blog') }}"
                                        class="{{ request()->routeIs('blog') ? 'active' : '' }}"
                                        wire:navigate>
                                        Blog
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        </li>

                        <li class="has-mega-menu">

                            <span
                                class="mega-trigger {{ request()->routeIs('about', 'our-team*') ? 'active' : '' }}">
                                About
                                <i class="fa-solid fa-angle-down"></i>
                            </span>

                            <div class="mega-menu mega-menu-small">

                                <div class="mega-menu-grid">

                                    <a href="{{ route('about') }}"
                                        class="{{ request()->routeIs('about') ? 'active' : '' }}"
                                        wire:navigate>
                                        About Us
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <a href="{{ route('our-team') }}"
                                        class="{{ request()->routeIs('our-team*') ? 'active' : '' }}"
                                        wire:navigate>
                                        Our Team
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        </li>

                    </ul>

                </nav>

            </div>

            <div class="navbar-right">

                <a href="{{ route('contact') }}" class="btn-primary">
                    Free Consultation
                </a>

            </div>

            <button class="menu-toggle" id="menuToggle">

                <i class="fa-solid fa-bars"></i>

            </button>

        </div>

    </div>

</header>

<div class="menu-overlay"></div>

<nav class="mobile-menu">

    <button class="menu-close" id="menuClose">
        &times;
    </button>

    <ul>

        <!-- Services -->
        <li class="mobile-dropdown">

            <button class="mobile-dropdown-toggle">
                <span>Services</span>
                <i class="fa-solid fa-angle-down"></i>
            </button>

            <ul class="mobile-submenu">

                <li><a href="{{ route('trademark-registration') }}" wire:navigate>Trademark Registration</a></li>
                <li><a href="{{ route('comprehensive-trademark-search') }}" wire:navigate>Comprehensive Trademark Search</a></li>
                <li><a href="{{ route('trademark-monitoring') }}" wire:navigate>Trademark Monitoring</a></li>
                <li><a href="{{ route('trademark-search') }}" wire:navigate>Free Trademark Search</a></li>
                <li><a href="{{ route('trademark-renewal') }}" wire:navigate>Trademark Renewal</a></li>
                <li><a href="{{ route('office-action-response') }}" wire:navigate>Office Action Response</a></li>
                <li><a href="{{ route('statement-of-use') }}" wire:navigate>Statement of Use</a></li>
                <li><a href="{{ route('filing-an-extension') }}" wire:navigate>Filing an Extension</a></li>
                <li><a href="{{ route('copyright-registration') }}" wire:navigate>Copyright Registration</a></li>
                <li><a href="{{ route('dmca-takedown') }}" wire:navigate>DMCA Takedown</a></li>

            </ul>

        </li>

        <!-- Resources -->
        <li class="mobile-dropdown">

            <button class="mobile-dropdown-toggle">
                <span>Resources</span>
                <i class="fa-solid fa-angle-down"></i>
            </button>

            <ul class="mobile-submenu">
                <li><a href="{{ route('faqs') }}" wire:navigate>FAQs</a></li>
                <li><a href="{{ route('blog') }}" wire:navigate>Blog</a></li>
            </ul>

        </li>

        <!-- About -->
        <li class="mobile-dropdown">

            <button class="mobile-dropdown-toggle">
                <span>About</span>
                <i class="fa-solid fa-angle-down"></i>
            </button>

            <ul class="mobile-submenu">
                <li><a href="{{ route('about') }}" wire:navigate>About Us</a></li>
                <li><a href="{{ route('our-team') }}" wire:navigate>Our Team</a></li>
            </ul>

        </li>

        <li>
            <a href="{{ route('contact') }}" wire:navigate>
                Free Consultation
            </a>
        </li>

    </ul>

</nav>
<script>
    document.querySelectorAll(".mobile-dropdown-toggle").forEach(button => {

    button.addEventListener("click", () => {

        const parent = button.parentElement;

        document.querySelectorAll(".mobile-dropdown").forEach(item => {
            if(item !== parent){
                item.classList.remove("active");
            }
        });

        parent.classList.toggle("active");

    });

});
</script>