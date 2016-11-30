<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item is-brand" href="/">
              <img src="{{ asset('images/logo.png') }}" alt="Cuipers Johnny | Bouwwerken">
            </a>
        </div>
        <div class="nav-right nav-menu">
            <a class="nav-item" href="/">
              Over ons
            </a>
            <a class="nav-item" href="/bouwwerken/nieuwbouw">
              Nieuwbouw
            </a>
            <a class="nav-item" href="/bouwwerken/verbouwing">
              Verbouwingen
            </a>
            <a class="nav-item" href="/bouwwerken/renovatie">
              Renovatie
            </a>
            <a class="nav-item" href="/jobs">
              Jobs
            </a>
            <a class="nav-item" href="/contact">
                Contact
            </a>
        </div>

        <div class="nav-right nav-menu is-mobile-menu" v-if="showMobileMenu">
            <a class="nav-item" href="/">
              Over ons
            </a>
            <a class="nav-item" href="/bouwwerken/nieuwbouw">
              Nieuwbouw
            </a>
            <a class="nav-item" href="/bouwwerken/verbouwing">
              Verbouwingen
            </a>
            <a class="nav-item" href="/bouwwerken/renovatie">
              Renovatie
            </a>
            <a class="nav-item" href="/jobs">
              Jobs
            </a>
            <a class="nav-item" href="/contact">
                Contact
            </a>
        </div>
    </div>
    <span class="nav-toggle" @click="showMobileMenu = !showMobileMenu">
        <span></span>
        <span></span>
        <span></span>
    </span>
</nav>