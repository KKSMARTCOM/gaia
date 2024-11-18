<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto">
        <i class="fas fa-bars menu-toggle-open"></i>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ Auth::user()->avatar ?? 'assets/img/avatar/avatar-1.png' }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    <!-- Affiche depuis combien de temps l'utilisateur est en ligne -->
                    en ligne il y a {{ now()->diffForHumans(session('login_time')) }}
                </div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profil
                </a>
                <a href="#" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Paramètre
                </a>
                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </a>
                </form>
            </div>
        </li>
    </ul>


</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">

            <i class="fas fa-arrow-left menu-toggle-close"></i>

            <a href="{{ route('dashboard') }}">GAIA LAB</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Tableau de bord</li>

            <li class="{{ setSidebarActive(['dashboard']) }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="fas fa-chart-line"></i><span>Tableau de bord</span></a>
            </li>

            <li class="{{ setSidebarActive(['admin.order-tests.*']) }}">
                <a href="{{ route('admin.order-tests.index') }}" class="nav-link"><i
                        class="fas fa-shopping-cart"></i><span>Commandes</span></a>
            </li>

            {{--             <li class="{{ setSidebarActive(['admin.dashboard.*']) }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-hand-holding-usd"></i><span>Paiement</span></a>
            </li> --}}

            <li class="{{ setSidebarActive(['admin.users.*']) }}"><a class="nav-link"
                    href="{{ route('admin.users.index') }}"><i class="far fa-user"></i>
                    <span>Utilisateurs</span></a></li>

            <li class="menu-header">Sections</li>

            <li class="{{ setSidebarActive(['admin.job.*']) }}"><a class="nav-link"
                    href="{{ route('admin.job.index') }}"><i class="fas fa-handshake"></i>
                    <span>Recrutements</span></a></li>

            <li class="{{ setSidebarActive(['admin.achievement.*']) }}"><a class="nav-link"
                    href="{{ route('admin.achievement.index') }}"><i class="fas fa-trophy"></i>
                    <span>Réalisations</span></a></li>

            <li class="{{ setSidebarActive(['admin.service.*']) }}"><a class="nav-link"
                    href="{{ route('admin.service.index') }}"><i class="fas fa-concierge-bell"></i>
                    <span>Services</span></a></li>

            <li class="{{ setSidebarActive(['admin.partner.*']) }}"><a class="nav-link"
                    href="{{ route('admin.partner.index') }}"><i class="fas fa-users"></i>
                    <span>Partenaires</span></a></li>

            <li class="menu-header">Paramètres</li>

            <li
                class="{{ setSidebarActive(['admin.settings.*', 'admin.banner.*', 'admin.general-setting.*', 'profile.*']) }}">
                <a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fas fa-cogs"></i>
                    <span>Paramètres</span></a>
            </li>

            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>       --}}

        </ul>
    </aside>
</div>
