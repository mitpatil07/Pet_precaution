<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_precaution";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $petBreed = $_POST["pet_breed"];
    $whatWeDo = $_POST["what_we_do"];
    $suggestion = $_POST["suggestion"];
    
    $sql = "INSERT INTO enquiries (name, email, pet_breed, what_we_do, suggestion)
    VALUES ('$name', '$email', '$petBreed', '$whatWeDo', '$suggestion')";
echo $sql; 
    // Validate form data (optional)
    if (empty($name) || empty($email) || empty($petBreed) || empty($whatWeDo) || empty($suggestion)) {
        echo "Please fill in all required fields.";
    } else {
        // Prepare and execute SQL statement
       
        if ($conn->query($sql) === TRUE) {
            echo "Thank you for your enquiry. We will get back to you soon.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>