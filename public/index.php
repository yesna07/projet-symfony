<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Seynabou Naby NDAW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 50%, #fae8ff 100%);
            color: #581c87;
            transition: all 0.5s ease;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            margin: 0;
        }
        .dark-mode {
            background: linear-gradient(135deg, #fa8be9ff 0%, #f65cd7ff 50%, #f3b5fdff 100%);
            color: #f3e8ff;
        }
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        .btn-pastel {
            background: linear-gradient(45deg, #d8b4fe, #c084fc);
            border: none;
            color: #4c1d95;
            font-weight: 600;
            padding: 15px 40px;
            font-size: 1.5rem;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(200, 132, 252, 0.4);
        }
        .dark-mode .btn-pastel {
            background: linear-gradient(45deg, #e9d5ff, #d8b4fe);
            color: #581c87;
            box-shadow: 0 8px 25px rgba(216, 180, 254, 0.5);
        }
        .name-title {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-weight: 700;
            font-size: 4.8rem;
            letter-spacing: 2px;
            background: linear-gradient(135deg, #a855f7 0%, #d8b4fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .dark-mode .name-title {
            background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .navbar {
            background: rgba(253, 242, 248, 0.9);
            backdrop-filter: blur(10px);
        }
        .dark-mode .navbar {
            background: rgba(167, 139, 250, 0.3);
        }
        .nav-link {
            font-weight: 500;
            color: #6b21a8 !important;
            font-size: 1.1rem;
        }
        .dark-mode .nav-link {
            color: #f3e8ff !important;
        }
        .nav-link:hover, .nav-link.active {
            color: #c084fc !important;
        }
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #6b21a8 !important;
        }
        .dark-mode .navbar-brand {
            color: #f3e8ff !important;
        }
        footer {
            background: rgba(253, 242, 248, 0.8);
            padding: 20px 0;
            font-size: 0.9rem;
        }
        .dark-mode footer {
            background: rgba(167, 139, 250, 0.3);
        }
    </style>
</head>
<body>

    <!-- Switch Thème -->
    <div class="theme-toggle">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="themeToggle">
            <label class="form-check-label" for="themeToggle">🌙</label>
        </div>
    </div>

    <!-- Menu fixe -->
    <nav class="navbar navbar-expand-lg fixed-top py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero pt-5 mt-5">
        <div class="container">
            <h1 class="name-title mb-4">
                Seynabou Naby<br>NDAW
            </h1>
            <h2 class="display-5 fw-light mb-4">Group B2</h2>
            <p class="lead fs-2 mb-5">
                First-year student<br>
                in Networks and Telecommunications
            </p>

            <!-- Container "To learn more" in English -->
            <div class="container my-5">
                <div class="card border-0 shadow-lg p-5" style="background: rgba(255, 255, 255, 0.8); border-radius: 20px;">
                    <h3 class="text-center mb-4" style="font-family: 'Playfair Display', serif; color: #6b21a8;">
                        To learn more
                    </h3>
                    <p class="text-center lead">
                        Discover my background, skills, projects and passions.
                    </p>
                    <div class="text-center mt-4">
                        <a href="portfolio.html" class="btn btn-pastel shadow-lg">
                            Learn more →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="text-center py-4">
        <p>© 2026 Seynabou Naby NDAW - All rights reserved<br>
        <small>This site is protected by copyright laws. Any reproduction prohibited without authorization.</small></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggle = document.getElementById('themeToggle');
        const body = document.body;

        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
            toggle.checked = true;
        }

        toggle.addEventListener('change', () => {
            if (toggle.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>
</html>