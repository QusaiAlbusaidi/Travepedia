<?php
// Define a class to represent a form submission record
class Submission {
    public $fullname;
    public $email;
    public $phonenumber;
    public $message;

    public function __construct($fullname, $email, $phonenumber, $message) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->phonenumber = $phonenumber;
        $this->message = $message;
    }
}

// Get the form submission
$fname = $_POST["FullName"];
$email = $_POST["Email"];
$phonenumber = $_POST["PhoneNumber"];
$message = $_POST["Message"];

// Create a record object
$submission = new Submission($fname, $email, $phonenumber, $message);

// Store it in an array of submissions
$submissions = [$submission]; // For now just one; scalable for multiple

// Function to display submissions in a Bootstrap-styled table
function renderTable($submissions) {
    $html = '<div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>';
    foreach ($submissions as $submission) {
        $html .= '<tr>
                    <td>' . htmlspecialchars($submission->fullname) . '</td>
                    <td>' . htmlspecialchars($submission->email) . '</td>
                    <td>' . htmlspecialchars($submission->phonenumber) . '</td>
                    <td>' . nl2br(htmlspecialchars($submission->message)) . '</td>
                  </tr>';
    }
    $html .= '</tbody></table></div>';
    return $html;
}

// Begin XHTML output
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '
<head>
    <title>Thank You | Travepedia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-5 text-success">Thank You, ' . htmlspecialchars($fname) . '!</h1>
            <p class="lead">We received your message. Here are the details you submitted:</p>
        </div>

        <div class="card shadow">
            <div class="card-body">
                ' . renderTable($submissions) . '
                <div class="text-center mt-4">
                    <a href="Questionnaire.html" class="btn btn-outline-primary">Back to Questionnaire</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2025 Travepedia. All rights reserved.</p>
    </footer>

</body>
</html>';
?>
