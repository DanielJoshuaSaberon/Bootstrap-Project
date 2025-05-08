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
                        <a class="nav-link active disabled text-light" href="#">About Us</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="../pages/post.php">Post</a>
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
                <h1 class="display-5 fw-bold">About Us</h1>
                <p class="fs-4 fw-normal mb-0">Discover the inspiration behind this website</p>
            </div>
        </div>
    </header>

    <div class="container my-5 bg-dark p-4 rounded">

        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <p class="lead lh-lg text-white">
                    <span class="fw-bold fs-1">Hello! </span>I created this blog to express my thoughts and share my
                    passion
                    for some of my
                    favorite
                    programming languages. As a developer, I've had the opportunity to work with many languages, but
                    there are a few that truly
                    stand out to me. Languages like Java, PHP, SQL, and HTML/CSS have shaped my development journey and
                    continue to
                    inspire me. Java,
                    with its versatility and widespread use in enterprise-level applications, is a language I deeply
                    admire. PHP has been
                    my go-to for building dynamic websites, and I love how flexible and powerful it is for server-side
                    scripting.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="../public/about.jpg" alt="Coding passion" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-6 order-md-2">
                <p class="lead lh-lg text-white">
                    SQL is essential for anyone working with databases, and its efficiency in querying large datasets is
                    unmatched.
                    Meanwhile, HTML and CSS serve as the foundation for web development, allowing me to create visually
                    appealing and
                    responsive websites.Through this blog, I aim to share my knowledge, help others learn, and build a
                    community of
                    like-minded developers.
                    I'll cover topics from beginner to advanced levels, provide code snippets, tutorials, and insights
                    that will help
                    anyone who wants to improve their programming skills.
                </p>
            </div>
            <div class="col-md-6 order-md-1 text-center">
                <img src="../public/about2.jpg" alt="Programming Languages" class="img-fluid rounded shadow">
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