<nav style="background: #111827; padding: 18px 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">

        <a href="{{ route('home') }}"
           style="color: white; text-decoration: none; font-size: 22px; font-weight: bold;">
            TechNova
        </a>

        <div style="display: flex; gap: 25px;">
            <a href="{{ route('home') }}"
               style="color: white; text-decoration: none;">
                Home
            </a>

            <a href="{{ route('about') }}"
               style="color: white; text-decoration: none;">
                About
            </a>

            <a href="{{ route('services') }}"
               style="color: white; text-decoration: none;">
                Services
            </a>

            <a href="{{ route('contact') }}"
               style="color: white; text-decoration: none;">
                Contact
            </a>
        </div>

    </div>
</nav>