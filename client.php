<?php
// Database connection
$host = 'localhost';
$dbname = 'salon';
$username = 'root'; // Replace with your DB username
$password = '';     // Replace with your DB password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve all bookings from the database
    $sql = "SELECT id, hair_design, adults, children, appointment_date, appointment_time FROM bookings";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all bookings
    $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return data as JSON
    echo json_encode($bookings);

} catch(PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
