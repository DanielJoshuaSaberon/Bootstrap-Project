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
                    <h2 class="text-center text-light">Java Programming</h2>
                </div>
                <div class="container col-md-12">
                    <p class="lead m-col text-light">
                        Java is a powerful, object-oriented programming language widely used for building cross-platform
                        applications.
                        Known for its “write once, run anywhere” philosophy, Java enables developers to create programs
                        that can run on any
                        device equipped with a Java Virtual Machine (JVM). It's commonly used in enterprise-level
                        backend development,
                        Android apps, and large-scale systems. Java emphasizes readability, portability, and
                        performance,
                        making it a top choice in academia and the professional world alike. Its vast ecosystem, strong
                        community support,
                        and mature frameworks like Spring and Hibernate contribute to its popularity. Whether you're
                        building web servers,
                        desktop software, or mobile applications, Java provides robust tools and libraries to make
                        development efficient
                        and maintainable.
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
                                                <a href="https://www.geeksforgeeks.org/object-oriented-programming-in-java/"
                                                    target="_blank" class="text-light">
                                                    OOP Concepts in Java
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.javatpoint.com/java-collections" target="_blank"
                                                    class="text-light">
                                                    Java Collections Framework
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.baeldung.com/java-threads" target="_blank"
                                                    class="text-light">
                                                    Multithreading in Java
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.baeldung.com/spring-boot" target="_blank"
                                                    class="text-light">
                                                    Introduction to Spring Boot
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.javatpoint.com/java-design-patterns"
                                                    target="_blank" class="text-light">
                                                    Java Design Patterns
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
                                            <li>
                                                <a href="https://roadmap.sh/backend" target="_blank" class="text-light">
                                                    Backend Developer Roadmap
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