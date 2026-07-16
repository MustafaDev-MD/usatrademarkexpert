<header class="header">

    <div class="container">

        <div class="navbar">

            <div class="navbar-left">
                <a href="{{ route('home') }}" wire:navigate class="logo">
                    <img src="{{ asset('assets/images/home/usa-trademark-logo.png') }}" alt="">
                </a>
            </div>

            <div class="navbar-center">

                <nav class="nav-menu">

                    <ul>
                        <li>
                            <a href="{{ route('services') }}"
                                class="{{ request()->routeIs('services') ? 'active' : '' }}"
                                wire:navigate>
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('resources') }}"
                                class="{{ request()->routeIs('resources*') ? 'active' : '' }}"
                                wire:navigate>
                                Resources
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}"
                                class="{{ request()->routeIs('about') ? 'active' : '' }}"
                                wire:navigate>
                                About
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('faqs') }}"
                                class="{{ request()->routeIs('faqs') ? 'active' : '' }}"
                                wire:navigate>
                                FAQs
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('blog') }}"
                                class="{{ request()->routeIs('blog') ? 'active' : '' }}"
                                wire:navigate>
                                Blog
                            </a>
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

        <li>
            <a href="{{ route('services') }}"
                class="{{ request()->routeIs('services') ? 'active' : '' }}"
                wire:navigate>
                Services
            </a>
        </li>

        <li>
            <a href="{{ route('resources') }}"
                class="{{ request()->routeIs('resources*') ? 'active' : '' }}"
                wire:navigate>
                Resources
            </a>
        </li>

        <li>
            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'active' : '' }}"
                wire:navigate>
                About
            </a>
        </li>

        <li>
            <a href="{{ route('faqs') }}"
                class="{{ request()->routeIs('faqs') ? 'active' : '' }}"
                wire:navigate>
                FAQs
            </a>
        </li>

        <li>
            <a href="{{ route('blog') }}"
                class="{{ request()->routeIs('blog') ? 'active' : '' }}"
                wire:navigate>
                Blog
            </a>
        </li>

        <li>
            <a href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                wire:navigate>
                Free Consultation
            </a>
        </li>

    </ul>

</nav>