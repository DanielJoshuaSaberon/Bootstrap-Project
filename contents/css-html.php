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
                        <a class="nav-link text-light" href="../pages/contactUs.php">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container py-5 bg-dark rounded mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="page-header mt-5">
                    <h2 class="text-center text-light">HTML and CSS</h2>
                </div>
                <div class="container col-md-12">
                    <p class="lead m-col text-light">
                        HTML (HyperText Markup Language) and CSS (Cascading Style Sheets) are the foundational
                        technologies for building web pages. HTML structures the content—like headings, paragraphs, and
                        images—while CSS controls the layout and visual styling, including olors, fonts, and
                        responsiveness. Together, they enable developers to create visually appealing and accessible
                        websites. HTML5 introduced powerful features such as audio, video, and semantic elements, while
                        modern CSS supports animations, grid/flexbox layouts, and dark mode themes. Learning HTML and
                        CSS is the first step for anyone entering the world of web development. Whether you're crafting
                        a personal portfolio or designing a professional site, these technologies provide the essential
                        tools to bring your ideas to life on the web.
                    </p>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="accordion" id="continueLearningAccordion">
                            <div class="accordion-item bg-dark border-light">
                                <h2 class="accordion-header" id="headingContinueLearning">
                                    <button class="accordion-button bg-dark text-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseContinueLearning"
                                        aria-expanded="false" aria-controls="collapseContinueLearning">
                                        Continue Learning
                                    </button>
                                </h2>
                                <div id="collapseContinueLearning" class="accordion-collapse collapse"
                                    aria-labelledby="headingContinueLearning"
                                    data-bs-parent="#continueLearningAccordion">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled text-light mt-3">
                                            <li>
                                                <a href="https://www.w3schools.com/html/" target="_blank"
                                                    class="text-light">
                                                    HTML Basics
                                            </li>
                                            <li>
                                                <a href="https://www.freecodecamp.org/news/learn-css-in-11-minutes/"
                                                    target="_blank" class="text-light">
                                                    Learn CSS Quickly
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML"
                                                    target="_blank" class="text-light">
                                                    HTML Documentation
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://css-tricks.com/" target="_blank" class="text-light">
                                                    CSS Tricks
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.codecademy.com/learn/learn-html" target="_blank"
                                                    class="text-light">
                                                    HTML & CSS Course
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.freecodecamp.org/learn/responsive-web-design/"
                                                    target="_blank" class="text-light">
                                                    Responsive Web Design
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id="relatedTopicsAccordion">
                            <div class="accordion-item bg-dark border-light">
                                <h2 class="accordion-header" id="headingRelatedTopics">
                                    <button class="accordion-button bg-dark text-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseRelatedTopics"
                                        aria-expanded="false" aria-controls="collapseRelatedTopics">
                                        Related Topics
                                    </button>
                                </h2>
                                <div id="collapseRelatedTopics" class="accordion-collapse collapse"
                                    aria-labelledby="headingRelatedTopics" data-bs-parent="#relatedTopicsAccordion">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled text-light mt-3">
                                            <li>
                                                <a href="https://www.w3schools.com/html/" target="_blank"
                                                    class="text-light">
                                                    HTML Basics
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.freecodecamp.org/news/learn-css-in-11-minutes/"
                                                    target="_blank" class="text-light">
                                                    Learn CSS Quickly
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide"
                                                    target="_blank" class="text-light">
                                                    JavaScript Guide
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.codecademy.com/learn/introduction-to-python"
                                                    target="_blank" class="text-light">
                                                    Intro to Python
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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