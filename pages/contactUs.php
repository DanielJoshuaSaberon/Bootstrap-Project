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
                        <a class="nav-link text-light" href="../pages/about.php">About Us</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link text-light" href="../pages/post.php">Post</a>
                    </li>
                    <li class="nav-item text-center flex-fill">
                        <a class="nav-link active disabled text-light" href="../pages/contactUs.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5 text-white">
        <div class="container text-center">
            <div style="background-color: rgba(0, 0, 0, 0.5); padding: 2rem; border-radius: 1rem;">
                <h1 class="display-5 fw-bold">Contact Us</h1>
                <p class="fs-4 fw-normal mb-0">We'd love to hear from you! Reach out with any questions or feedback.</p>
            </div>
        </div>
    </header>

    <div class="container my-5 bg-dark p-4 rounded">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-light  mb-4">Reach Out</h1>
                <p class="text-light lead fs-4">
                    <strong>Blog Headquarters</strong><br>
                    123 Blog Street, Suite 456<br>
                    City, Country 78910
                </p>
                <p class="text-light lead fs-4">
                    <strong>Phone:</strong> (123) 456-7890<br>
                    <strong>Email:</strong> <a href="mailto:contact@theblog.com"
                        class="text-light">contact@theblog.com</a>
                </p>

                <div class="social-icons">
                    <a href="https://www.facebook.com" target="_blank" class="text-light me-3">
                        <i class="bi bi-facebook" style="font-size: 2rem; color: #1877F2;"></i>
                    </a>
                    <a href="https://mail.google.com" target="_blank" class="text-light me-3">
                        <i class="bi bi-envelope" style="font-size: 2rem; color: #D44638;"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="text-light">
                        <i class="bi bi-instagram" style="font-size: 2rem; color: #C13584;"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-light mb-4">Get in Touch</h1>
                <p class="text-light">Feel free to send us a message using the contact form below. We aim to reply
                    within 24 hours.</p>

                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Your Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Your Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-light">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-light">Send Message</button>
                </form>
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