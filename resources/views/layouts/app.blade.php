<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hub Numérique</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex">
    <!-- bar de navigation -->
    <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
        <h4>Hub Numérique</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="" class="nav-link text-white">Dashboard</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Participants</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Formateurs</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Formations</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Inscriptions</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Déconnexion</a></li>
        </ul>
    </div>

    <!-- Le corps du site -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
