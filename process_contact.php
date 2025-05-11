<?php
// 1. Retrieve form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// 2. Display the submitted data (styled to match your theme)
echo '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Travepedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .thank-you-banner {
            background: url("oman.jpg") center/cover no-repeat;
            min-height: 45vh;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Reuse your header -->
    <header>
        <nav class="navbar navbar-white bg-white p-3">
            <div class="container-fluid">
                <div class="align-items-center">
                    <img src="TravepediaWW.png" alt="Logo" width="70" class="me-2">
                    <a href="index.html" class="navbar-brand fs-3 fw-bold text-dark">Travepedia</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Thank you banner -->
    <div class="vh-100 d-flex align-items-center justify-content-center text-white thank-you-banner">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Thank You, ' . $name . '!</h1>
            <p class="lead fs-4">We\'ll get back to you soon.</p>
        </div>
    </div>

    <!-- Submitted data display -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="rounded-3 shadow-sm p-4">
                    <h3 class="text-primary mb-4">Your Message:</h3>
                    <p><strong>Email:</strong> ' . $email . '</p>
                    <p><strong>Message:</strong> ' . $message . '</p>
                    <a href="contact.php" class="btn btn-primary mt-3">Back to Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Reuse your footer -->
    <footer class="bg-primary text-white py-4 text-center">
        <p class="mb-0">&copy; 2025 Travepedia. All rights reserved.</p>
    </footer>
</body>
</html>
';
?>