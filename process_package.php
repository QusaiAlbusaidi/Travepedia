<?php

require_once 'config.php';

class TourPackage {
    public $id;
    public $category;
    public $best_time;
    public $cost;
    public $booking_link;

    public function __construct($id, $category, $best_time, $cost, $booking_link) {
        $this->id = $id;
        $this->category = $category;
        $this->best_time = $best_time;
        $this->cost = $cost;
        $this->booking_link = $booking_link;
    }
}

// Create database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle CRUD operations
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // SEARCH operation
    if (isset($_GET['search'])) {
        $searchTerm = $conn->real_escape_string($_GET['searchTerm']);
        $sql = "SELECT * FROM tour_packages 
                WHERE category LIKE '%$searchTerm%' 
                OR best_time LIKE '%$searchTerm%' 
                OR cost LIKE '%$searchTerm%'";
        $result = $conn->query($sql);
        
        $packages = array();
        while ($row = $result->fetch_assoc()) {
            $packages[] = new TourPackage(
                $row['id'],
                $row['category'],
                $row['best_time'],
                $row['cost'],
                $row['booking_link']
            );
        }
        displayPackages($packages);
    }
    
    // DELETE operation
    elseif (isset($_GET['delete'])) {
        $id = intval($_GET['delete']);
        $sql = "DELETE FROM tour_packages WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Package deleted successfully!";
        } else {
            echo "Error deleting package: " . $conn->error;
        }
    }
    
    // GET ALL packages (default)
    else {
        $sql = "SELECT * FROM tour_packages";
        $result = $conn->query($sql);
        
        $packages = array();
        while ($row = $result->fetch_assoc()) {
            $packages[] = new TourPackage(
                $row['id'],
                $row['category'],
                $row['best_time'],
                $row['cost'],
                $row['booking_link']
            );
        }
        displayPackages($packages);
    }
}

// Handle POST requests
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // INSERT operation
    if (isset($_POST['add'])) {
        $category = $conn->real_escape_string($_POST['category']);
        $bestTime = $conn->real_escape_string($_POST['bestTime']);
        $cost = $conn->real_escape_string($_POST['cost']);
        $bookingLink = $conn->real_escape_string($_POST['bookingLink']);
        
        $sql = "INSERT INTO tour_packages (category, best_time, cost, booking_link) 
                VALUES ('$category', '$bestTime', '$cost', '$bookingLink')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Package added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // UPDATE operation
    elseif (isset($_POST['update'])) {
        $id = intval($_POST['id']);
        $category = $conn->real_escape_string($_POST['category']);
        $bestTime = $conn->real_escape_string($_POST['bestTime']);
        $cost = $conn->real_escape_string($_POST['cost']);
        $bookingLink = $conn->real_escape_string($_POST['bookingLink']);
        
        $sql = "UPDATE tour_packages 
                SET category='$category', best_time='$bestTime', cost='$cost', booking_link='$bookingLink' 
                WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            echo "Package updated successfully!";
        } else {
            echo "Error updating package: " . $conn->error;
        }
    }
}

// Function to display packages in table format
function displayPackages($packages) {
    if (empty($packages)) {
        echo "<tr><td colspan='5' class='text-center'>No packages found</td></tr>";
        return;
    }

    foreach ($packages as $pkg) {
        echo "<tr class='border-bottom border-white'>
                <td class='p-4 fw-semibold align-middle'>{$pkg->category}</td>
                <td class='p-4 align-middle text-center'>
                    <span class='badge bg-info text-dark'>{$pkg->best_time}</span>
                </td>
                <td class='p-4 align-middle text-success fw-bold'>{$pkg->cost}</td>
                <td class='p-4 text-center'>
                    <a href='{$pkg->booking_link}' class='btn btn-primary rounded-5 px-4'>Book Now</a>
                </td>
                <td class='p-4 text-center'>
                    <button class='btn btn-warning rounded-5 px-4 edit-btn' 
                            data-id='{$pkg->id}'
                            data-category='{$pkg->category}'
                            data-besttime='{$pkg->best_time}'
                            data-cost='{$pkg->cost}'
                            data-bookinglink='{$pkg->booking_link}'>
                        Edit
                    </button>
                    <a href='process_tours.php?delete={$pkg->id}' class='btn btn-danger rounded-5 px-4'>Delete</a>
                </td>
              </tr>";
    }
}

$conn->close();
?>
