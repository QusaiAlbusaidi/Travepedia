<?php
// Define a class for a contact record
class Contact {
    public $name;
    public $position;
    public $email;
    public $phone;

    public function __construct($name, $position, $email, $phone) {
        $this->name = $name;
        $this->position = $position;
        $this->email = $email;
        $this->phone = $phone;
    }
}

// Retrieve POST data
$name = $_POST["name"] ?? '';
$position = $_POST["position"] ?? '';
$email = $_POST["email"] ?? '';
$phone = $_POST["phone"] ?? '';

// Create an object
$contact = new Contact($name, $position, $email, $phone);

// Store it in an array (can hold multiple records)
$contacts = [$contact];

// Function to render the XHTML table
function renderContactTable($contacts) {
    $html = '<div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>';
    foreach ($contacts as $c) {
        $html .= '<tr>
                    <td>' . htmlspecialchars($c->name) . '</td>
                    <td>' . htmlspecialchars($c->position) . '</td>
                    <td>' . htmlspecialchars($c->email) . '</td>
                    <td>' . htmlspecialchars($c->phone) . '</td>
                  </tr>';
    }
    $html .= '</tbody></table></div>';
    return $html;
}

// Output XHTML page
?>
<html>
<head>
    <title>Contact Submission</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

    <div class="container my-5">
        <h1 class="mb-4 text-primary text-center">Submitted Contact Information</h1>
        <?php echo renderContactTable($contacts); ?>
        <div class="text-center mt-4">
            <a href="AboutUs.html" class="btn btn-outline-primary">Back to Form</a>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2025 ContactApp. All rights reserved.</p>
    </footer>

</body>
</html>
