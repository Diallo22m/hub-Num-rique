<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hub Numérique - Kindia</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS personnalisé -->
    <style>
        /* ===================== BODY ===================== */
        body {
            font-family: 'Segoe UI', 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            background-color: #f4f6f9;
        }

        /* ===================== NAVBAR ===================== */
        .navbar {
            padding: 15px 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #555;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #0d6efd;
        }

        /* ===================== HERO ===================== */
        #accueil {
            background: url('{{ asset("admin/img/banner.jpg") }}') center/cover no-repeat;
            color: #fff;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: center;
        }

        #accueil::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0,0,0,0.5);
        }

        #accueil .container {
            position: relative;
            z-index: 1;
        }

        #accueil h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        #accueil p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }

        /* ===================== CARDS ===================== */
        .card-visitor {
            background-color: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .card-visitor:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .card-visitor h5 {
            color: #0d6efd;
            font-weight: 700;
            margin-top: 15px;
        }

        .card-visitor p {
            color: #555;
            font-size: 0.95rem;
        }

        .card-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        /* ===================== FORMULAIRE ===================== */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
        }

        form input, form select, form textarea {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 12px;
            margin-bottom: 15px;
            width: 100%;
            transition: all 0.3s;
        }

        form input:focus, form select:focus, form textarea:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 8px rgba(13,110,253,0.2);
            outline: none;
        }

        /* ===================== FOOTER ===================== */
        footer {
            background-color: #0d6efd;
            color: #fff;
            text-align: center;
            padding: 25px;
            font-size: 0.9rem;
        }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
            }
        }

        @media (max-width: 575px) {
            #accueil h1 {
                font-size: 2rem;
            }
            #accueil p {
                font-size: 1rem;
            }
            .card-visitor h5 {
                font-size: 1rem;
            }
            .card-visitor p {
                font-size: 0.85rem;
            }
            .btn-visiteur {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top">
    <div class="container">
         <a class="navbar-brand d-flex align-items-center" href="#accueil">
            <img src="{{ asset('admin/img/logo.png') }}" alt="Logo" class="img-fluid me-2" style="max-height:100px;">
            <span class="fw-bold">Hub Numérique - Kindia</span>
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
        <p>Découvrez nos formations et inscrivez-vous pour développer vos compétences numériques.</p>
        <a href="#inscription" class="btn btn-visiteur btn-lg">S'inscrire Maintenant</a>
    </div>
</section>

<!-- ===== FORMATIONS ===== -->
<section id="formations" class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center text-success">Nos Formations</h2>
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
                    <img src="{{ asset('admin/img/profile-img.jpg') }}" class="img-fluid rounded-circle mb-3" style="height:120px;">
                    <h5>Amadou Diallo</h5>
                    <p>Développement Web</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('admin/img/profile-img.jpg') }}" class="img-fluid rounded-circle mb-3" style="height:120px;">
                    <h5>Fatoumata Camara</h5>
                    <p>Infographie</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('admin/img/profile-img.jpg') }}" class="img-fluid rounded-circle mb-3" style="height:120px;">
                    <h5>Ibrahima Barry</h5>
                    <p>Réseaux & Systèmes</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-visitor">
                    <img src="{{ asset('admin/img/profile-img.jpg') }}" class="img-fluid rounded-circle mb-3" style="height:120px;">
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
