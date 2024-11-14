<?php
// Database connection
$host = 'localhost';
$dbname = 'salon';
$username = 'root'; // replace with your DB username
$password = '';     // replace with your DB password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data into the database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hair_design = $_POST['hair_design'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $sql = "INSERT INTO bookings (hair_design, adults, children, appointment_date, appointment_time)
                VALUES (:hair_design, :adults, :children, :date, :time)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':hair_design' => $hair_design,
            ':adults' => $adults,
            ':children' => $children,
            ':date' => $date,
            ':time' => $time
        ]);

        echo "Booking saved successfully!";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
