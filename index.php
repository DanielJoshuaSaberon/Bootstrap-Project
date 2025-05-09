<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The BLOG website</title>
    <link rel="icon" type="image/png" href="public/icon.png">
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
    style="background-image: url('public/bg.png'); background-size: cover; background-position: center; background-attachment: fixed; margin: 0; padding: 0;">
    <nav class="navbar navbar-dark bg-black">
        <div class="container-fluid d-flex flex-column align-items-start">

            <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <a class="navbar-brand text-light fs-1" href="index.php">
                    <img src="public/logo.png" alt="The BLOG website" style="width: 300px; height: auto;">
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
                        <a class="nav-link active disabled text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="pages/about.php">About Us</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="pages/post.php">Post</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="pages/contactUs.php">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <header class="py-5 text-white">
        <div class="container text-center">
            <div style="background-color: rgba(0, 0, 0, 0.5); padding: 2rem; border-radius: 1rem;">
                <h1 class="display-5 fw-bold">The Blogs</h1>
                <p class="fs-4 fw-normal">A journey through code, creativity, and learning</p>
            </div>
        </div>
    </header>


    <div class="container mb-5">
        <div class="row g-4 justify-content-center">

            <div class="col-md-6">
                <button onclick="location.href='contents/java.php'"
                    class="w-100 bg-dark text-light p-3 rounded text-center shadow border-0 post-btn h-100"
                    style="height: 300px;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <img src="public/java.jpg" alt="Java" style="width: 85%; height: 300px; object-fit: cover;"
                            class="rounded mx-auto">
                        <div>
                            <h2 class="mb-2">Java</h2>
                            <p class="lead mb-1">Want to know more? Click Here</p>
                            <p class="mb-0">05-21-2003</p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="col-md-6">
                <button onclick="location.href='contents/php.php'"
                    class="w-100 bg-dark text-light p-3 rounded text-center shadow border-0 post-btn h-100"
                    style="height: 300px;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <img src="public/php.png" alt="PHP" style="width: 85%; height: 300px; object-fit: cover;"
                            class="rounded mx-auto">
                        <div>
                            <h2 class="mb-2">PHP</h2>
                            <p class="lead mb-1">Want to know more? Click Here</p>
                            <p class="mb-0">05-21-2003</p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="col-md-6">
                <button onclick="location.href='contents/sql.php'"
                    class="w-100 bg-dark text-light p-3 rounded text-center shadow border-0 post-btn h-100"
                    style="height: 300px;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <img src="public/sql.png" alt="SQL" style="width: 85%; height: 300px; object-fit: cover;"
                            class="rounded mx-auto">
                        <div>
                            <h2 class="mb-2">SQL</h2>
                            <p class="lead mb-1">Want to know more? Click Here</p>
                            <p class="mb-0">05-21-2003</p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="col-md-6">
                <button onclick="location.href='contents/css-html.php'"
                    class="w-100 bg-dark text-light p-3 rounded text-center shadow border-0 post-btn h-100"
                    style="height: 300px;">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <img src="public/css-html.png" alt="HTML/CSS"
                            style="width: 85%; height: 300px; object-fit: cover;" class="rounded mx-auto">
                        <div>
                            <h2 class="mb-2">HTML/CSS</h2>
                            <p class="lead mb-1">Want to know more? Click Here</p>
                            <p class="mb-0">05-21-2003</p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="col-12 text-end mt-3">
                <button class="btn btn-outline-light btn-lg">Older Post</button>
            </div>

        </div>
    </div>

    <footer class="container text-center text-white py-4">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Technology</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Health</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Science</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Nature</a></li>
        </ul>
        <p class="mt-3 mb-0">&copy; 2025 The Blog. All rights reserved.</p>
    </footer>

</body>

</html>