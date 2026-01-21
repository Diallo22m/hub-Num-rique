<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hub Numérique - Kindia</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top">
    <div class="container">
         <a class="navbar-brand d-flex align-items-center" href="#accueil">
            <img src="{{ asset('user/img/logo.png') }}" alt="Logo" class="img-fluid me-1" style="max-height:120px;">
            <span class="fw-bold text-white">Hub Numérique - Kindia</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-3">
                <li class="nav-item"><a class="nav-link active" href="#accueil">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#formations">Formations</a></li>
                <li class="nav-item"><a class="nav-link" href="#formateurs">Formateurs</a></li>
                <li class="nav-item"><a class="nav-link" href="#inscription">Inscription</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ===== HERO ===== -->
<section id="accueil">
    <div class="container">
        <h1>Bienvenue au Hub Numérique de Kindia</h1>
        <p class="text-white">Découvrez nos formations et inscrivez-vous pour développer vos compétences numériques.</p>
        <a href="#inscription" class="btn btn-visiteur btn-lg">S'inscrire Maintenant</a>
    </div>
</section>

<!-- ===== FORMATIONS ===== -->
<section id="formations" class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center  text-success">Nos Formations</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-visitor">
                    <i class="bi bi-code-slash card-icon"></i>
                    <h5>Développement Web</h5>
                    <p>Apprenez à créer des sites web modernes avec HTML, CSS, JS et frameworks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-visitor">
                    <i class="bi bi-palette card-icon"></i>
                    <h5>Infographie</h5>
                    <p>Maîtrisez le design graphique, la retouche photo et la création de visuels.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-visitor">
                    <i class="bi bi-server card-icon"></i>
                    <h5>Réseaux & Systèmes</h5>
                    <p>Comprenez les infrastructures réseau, la sécurité et la gestion des serveurs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FORMATEURS ===== -->
<section id="formateurs" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-5 text-center text-success">Nos Formateurs</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('user/img/support.jpg') }}" class="img-fluid  mb-3" style="height: 130px;;">
                    <h5 >Mamadou Oury Diallo</h5>
                    <p>Informatique Bureautique</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('user/img/fomateur1.jpg') }}" class="img-fluid  mb-3" style="height: 130px;;">
                    <h5>Fatoumata Camara</h5>
                    <p>Infographie</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('user/img/fomateur1.jpg') }}" class="img-fluid  mb-3" style="height: 130px;;">
                    <h5>Mohamed Foulayah Sylla</h5>
                    <p>Réseaux & Systèmes</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('user/img/support.jpg') }}" class="img-fluid  mb-3" style="height: 130px;;">
                    <h5>Salif Keita</h5>
                    <p>Support Technique</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== INSCRIPTION ===== -->
<section id="inscription" class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center text-success">Inscrivez-vous</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nom <strong class="text-danger">*</strong></label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prénom <strong class="text-danger">*</strong></label>
                        <input type="text" name="prenom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Téléphone <strong class="text-danger">*</strong></label>
                        <input type="text" name="telephone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Formation <strong class="text-danger">*</strong></label>
                        <select name="id_formation" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            <option value="1">Développement Web</option>
                            <option value="2">Infographie</option>
                            <option value="3">Réseaux & Systèmes</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-visiteur btn-lg w-100">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
    &copy; 2026 Hub Numérique - Kindia
</footer>

<!-- ===== SCRIPTS ===== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Activer le lien actif en scroll
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navbar .nav-link");

    window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 90;
            if (scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    });
</script>
</body>
</html>
