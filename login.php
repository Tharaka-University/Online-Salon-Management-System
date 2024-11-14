<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $email = $conn->real_escape_string($email);

    
    $sql = "SELECT id, name,role, email, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();

        
        if (password_verify($password, $row['password'])) {
            // Start a session and store user info
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];

           
            header("Location: dashboard.html");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with this email.";
    }
}


$conn->close();
?>
