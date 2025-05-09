<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The BLOG website</title>
    <link rel="icon" type="image/png" href="../public/icon.png">
    <style>
        body::-webkit-scrollbar {
            display: none;
        }

        .nav-pills .nav-link.active {
            background-color: #f1f1f1 !important;
            color: #000000 !important;
            border-radius: 0.375rem;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        }

        .nav-pills .nav-link:hover {
            background-color: #959595 !important;
            color: #000000 !important;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 8px rgba(255, 255, 255, 0.15);
        }
    </style>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark-subtle"
    style="background-image: url('../public/bg.png'); background-size: cover; background-position: center; background-attachment: fixed; margin: 0; padding: 0;">

    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-black">
        <div class="container-fluid d-flex flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <a class="navbar-brand text-light fs-1" href="../index.php">
                    <img src="../public/logo.png" alt="The BLOG website" style="width: 300px; height: auto;">
                </a>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>

            <div class="w-100">
                <ul class="navbar-nav nav nav-pills nav-fill flex-row w-100 justify-content-between">
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="../pages/about.php">About Us</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link active disabled text-light" href="#">Post</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="../pages/contactUs.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5 text-white">
        <div class="container text-center">
            <div style="background-color: rgba(0, 0, 0, 0.5); padding: 2rem; border-radius: 1rem;">
                <h1 class="display-5 fw-bold">Post</h1>
                <p class="fs-4 fw-normal mb-0">Discover the inspiration behind this website</p>
            </div>
        </div>
    </header>

    <div class="container my-5 bg-dark p-4 rounded">
        <div class="post-header text-white mb-4">
            <h2>Exploring the Power of Programming Languages</h2>
            <div class="d-flex justify-content-between text-light">
                <p>Posted on: <strong>May 7, 2025</strong></p>
                <p>By: <strong>Daniel Joshua Saberon</strong> | <span>Comptuer Professional</span></p>
            </div>
        </div>

        <p class="lead text-light">
            In this post, I would like to share my journey as a developer and how my love for coding has shaped the way
            I view the world. Programming languages like Java, PHP, and HTML/CSS have been my go-to tools for building
            impactful applications and websites. Each language has its strengths, and throughout this blog, I will dive
            into how they contribute to the world of development.
        </p>

        <p class="lead text-light">
            My interest in coding began when I first learned HTML and CSS. These languages introduced me to the power
            of web development and opened my eyes to the potential of creating something from scratch that people could
            use. From there, I ventured into PHP and Java, exploring the deeper functionalities that these languages
            offer for building dynamic, scalable, and enterprise-level solutions.
        </p>

        <h3 class="text-light">What You Can Expect From This Blog</h3>
        <p class="lead text-light">
            Through this blog, I aim to share tutorials, tips, and thoughts on various technologies I have worked with,
            such as Java, PHP, SQL, and modern web development techniques. Whether you're a beginner or an experienced
            developer, you will find something useful here, from basic tips to advanced topics that can help you grow as
            a developer.
        </p>

        <p class="lead text-light">
            I encourage you to explore different areas of programming and to keep experimenting and building. The
            journey
            is as exciting as the destination, and through this blog, I hope to inspire you to continue learning and
            growing
            in the field of development.
        </p>
    </div>

    <footer class="container text-center text-white py-4">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="../index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Technology</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Health</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Science</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Nature</a></li>
        </ul>
        <p class="mt-3 mb-0">&copy; 2025 The Blog. All rights reserved.</p>
    </footer>

</body>

</html>