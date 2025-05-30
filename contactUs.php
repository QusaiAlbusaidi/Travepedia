<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-white bg-white p-3">
            <div class="container-fluid">
                <div class="align-items-center">
                    <img src="TravepediaWW.png" alt="Logo" width="70" class="me-2">
                    <a href="index.html" class="navbar-brand fs-3 fw-bold text-dark">Travepedia</a>
                </div>
                <ul class="navbar-nav flex-row gap-5">
                    <li class="nav-item"><a href="AboutUs.html" class="nav-link fw-bold">About Us</a></li>
                    <li class="nav-item"><a href="Services.html" class="nav-link fw-bold">Services</a></li>
                    <li class="nav-item"><a href="HolidayPackages.html" class="nav-link fw-bold">Holiday Packages</a></li>
                    <li class="nav-item"><a href="luxury.html" class="nav-link fw-bold ">Luxury Concierge</a></li>
                    <li class="nav-item"><a href="ExperienceOman.html" class="nav-link fw-bold ">Experience Oman</a></li>
                    <li class="nav-item"><a href="Feedback.html" class="nav-link fw-bold">Feedback</a></li>
                    <li class="nav-item"><a href="contactUs.html" class="btn btn-primary fw-bold">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class=" vh-100 d-flex align-items-center justify-content-center text-white" style=" background: url('oman.jpg') center/cover no-repeat; min-height: 45vh;">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Contact Travepedia</h1>
            <p class="lead fs-4">Get in touch with our team</p>
        </div>
    </div>

 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class=" rounded-3 shadow-sm mb-4">
                    <div class="text-center p-4">
                        <h3 class="text-primary mb-3">Visit Us</h3>
                        <p class="mb-0">Sultan Qaboos University<br>Muscat, Oman</p>
                    </div>
                </div>
                
                <div class="rounded-3 shadow-sm">
                    <div class=" text-center p-4">
                        <h3 class="text-primary mb-3">Call Us</h3>
                        <p class="mb-1">+968 77105152</p>
                        <p class="mb-0">Sunday-Thursday: 8:00 AM - 6:00 PM</p>
                </div>
             </div>
            </div>
    </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="rounded-3 shadow-sm border-0">
                    <div class=" p-4 p-md-5">
                        <h2 class="text-center text-primary mb-4">Email us</h2>
                        <p class="text-center text-muted mb-4">In a rush? No problem! Use the form below to email us!</p>
                        
                        <form method="post" action="process_contact.php">
                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold text-dark">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold text-dark">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold text-dark">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Submit</button>
                        </form>
                    </div>
            </div>
            </div>
    </div>
    </div>

    <div class="container my-5 text-center">
        <h3 class="mb-4">Connect With Us</h3>
        <div class="d-flex justify-content-center gap-4">
            <a href="#"><img src="facebook.png" alt="Facebook" width="40"></a>
            <a href="https://x.com/travepedia"><img src="x.png" alt="Twitter" width="40"></a>
            <a href="#"><img src="insta.png" alt="Instagram" width="40"></a>
        </div>
    </div>

    <footer class="bg-primary text-white py-4 text-center">
        <p class="mb-0">&copy; 2025 Travepedia. All rights reserved.</p>
    </footer>
   
</body>
</html>
