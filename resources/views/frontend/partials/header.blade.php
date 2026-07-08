<header class="header">

    <div class="container">

        <div class="navbar">

            <div class="navbar-left">
                <a href="{{ route('home') }}" class="logo">
                    USA Trademark Expert
                </a>
            </div>

            <div class="navbar-center">

                <nav class="nav-menu">

                    <ul>

                        <li><a href="{{ route('services') }}" class="active">Services</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('faq') }}">FAQs</a></li>

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

        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('faq') }}">FAQs</a></li>
        <li><a href="{{ route('contact') }}">Free Consultation</a></li>

    </ul>

</nav>