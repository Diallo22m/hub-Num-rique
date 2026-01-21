<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hub Numérique - Kindia</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    {{-- CSS personnalisé --}}
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    {{-- OVERLAY MOBILE --}}
    <div id="overlay"></div>

    {{-- ===== SIDEBAR ===== --}}
    <aside class="sidebar" id="sidebar">
        <div class="text-center mb-4">
            <img src="{{ asset('admin/img/logo.png') }}" class="img-fluid mb-2" style="max-height:90px;">
            <h4>Hub Numérique - Kindia</h4>
        </div>

        <ul class="nav nav-pills flex-column gap-2">

            <li>
                <a class="nav-link {{ Route::is('dashboard.index') ? 'active' : '' }}"
                   href="{{ route('dashboard.index') }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>

            <li>
                <a class="nav-link {{ Route::is('formations.*') ? 'active' : '' }}"
                   href="{{ route('formations.liste') }}">
                    <i class="bi bi-journal-text me-2"></i> Formations
                </a>
            </li>

            <li>
                <a class="nav-link {{ Route::is('formateurs.*') ? 'active' : '' }}"
                   href="{{ route('formateurs.liste') }}">
                    <i class="bi bi-person-badge me-2"></i> Formateurs
                </a>
            </li>

            <li>
                <a class="nav-link {{ Route::is('apprenants.*') ? 'active' : '' }}"
                   href="{{ route('apprenants.liste') }}">
                    <i class="bi bi-people me-2"></i> Apprenants
                </a>
            </li>

            <li>
                <a class="nav-link {{ Route::is('inscriptions.*') ? 'active' : '' }}"
                   href="{{ route('inscriptions.liste') }}">
                    <i class="bi bi-pencil-square me-2"></i> Inscriptions
                </a>
            </li>

            <li class="mt-auto">
                <a class="nav-link text-danger" href="#">
                    <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                </a>
            </li>

        </ul>
    </aside>

    {{-- ===== CONTENU ===== --}}
    <div class="content flex-grow-1">

        {{-- NAVBAR --}}
        <nav class="navbar bg-white shadow-sm px-4">
            <div class="d-flex align-items-center">
                <button class="btn btn-light btn-sm me-3 d-lg-none" id="toggleSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <span class="fs-4 text-uppercase fw-bold">Tableau de bord</span>
            </div>

            <div class="dropdown">
                <a class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown">
                    <img src="{{ asset('admin/img/profile-img.jpg') }}"
                         width="40" height="40"
                         class="rounded-circle me-2">
                    <span>Mamadou Oury Diallo</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Paramètres</a></li>
                    <li><hr></li>
                    <li><a class="dropdown-item text-danger" href="#">Déconnexion</a></li>
                </ul>
            </div>
        </nav>

        {{-- CONTENU --}}
        <div class="container-fluid p-4">
            @yield('content')
        </div>

        {{-- FOOTER --}}
        <footer class="bg-dark text-white text-center py-3">
            &copy; 2026 Hub Numérique - Kindia
        </footer>

    </div>
</div>

{{-- ===================== SCRIPTS ===================== --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- TOASTR CONFIG --}}
<script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 4000,
    };

    @if(session('success'))
        toastr.success(@json(session('success')));
    @endif

    @if(session('error'))
        toastr.error(@json(session('error')));
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error(@json($error));
        @endforeach
    @endif
</script>

{{-- SIDEBAR TOGGLE --}}
<script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    toggleBtn?.addEventListener('click', () => {
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
    });

    overlay?.addEventListener('click', () => {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
    });
</script>

</body>

</html>
