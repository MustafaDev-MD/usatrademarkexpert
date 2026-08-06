@php

$services = [
'trademark-registration' => 'Trademark Registration',
'comprehensive-trademark-search' => 'Comprehensive Trademark Search',
'trademark-monitoring' => 'Trademark Monitoring',
'trademark-search' => 'Free Trademark Search',
'trademark-renewal' => 'Trademark Renewal',
'office-action-response' => 'Office Action Response',
'statement-of-use' => 'Statement of Use',
'filing-an-extension' => 'Filing an Extension',
'copyright-registration' => 'Copyright Registration',
'dmca-takedown' => 'DMCA Takedown',
];

@endphp
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

                        <li class="has-mega-menu mega-delay">

                            <span
                                class="mega-trigger {{ request()->is('services*') ? 'active' : '' }}"
                                wire:navigate>
                                Services
                                <i class="fa-solid fa-angle-down"></i>
                            </span>

                            <div class="mega-menu">

                                <div class="mega-menu-grid">

                                    @foreach($services as $slug => $title)

                                    <a href="{{ route('service', $slug) }}"
                                        class="{{ request()->route('slug') === $slug ? 'active' : '' }}"
                                        wire:navigate>

                                        {{ $title }}

                                        <i class="fa-solid fa-arrow-right"></i>

                                    </a>

                                    @endforeach

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

                                    <!-- <a href="{{ route('our-team') }}"
                                        class="{{ request()->routeIs('our-team*') ? 'active' : '' }}"
                                        wire:navigate>
                                        Our Team
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a> -->

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

                @foreach($services as $slug => $title)

                <li>
                    <a href="{{ route('service', $slug) }}" wire:navigate>
                        {{ $title }}
                    </a>
                </li>

                @endforeach

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
                <!-- <li><a href="{{ route('our-team') }}" wire:navigate>Our Team</a></li> -->
            </ul>

        </li>

        <li>
            <a href="{{ route('contact') }}" wire:navigate>
                Free Consultation
            </a>
        </li>

    </ul>

</nav>