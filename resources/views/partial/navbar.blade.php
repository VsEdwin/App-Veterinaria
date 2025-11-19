@unless (request()->routeIs('login'))

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-house-heart-fill"></i> Veterinaria
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        <i class="bi bi-house-fill"></i> Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('usuarios.index') ? 'active' : '' }}"
                        href="{{ route('usuarios.index') }}">
                        <i class="bi bi-people-fill"></i> Usuarios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('clientes*') ? 'active' : '' }}"
                        href="#">
                        <i class="bi bi-person-heart"></i> Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('citas*') ? 'active' : '' }}"
                        href="{{route('citas.index')}}">
                        <i class="bi bi-calendar2-check-fill"></i> Citas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('vacunas*') ? 'active' : '' }}"
                        href="#">
                        <i class="bi bi-capsule-pill"></i> Vacunas
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

@endunless
