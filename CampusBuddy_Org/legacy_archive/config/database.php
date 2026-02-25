<?php
// Database Configuration
$host = 'localhost';
$dbname = 'campusbuddy_cr';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // If database doesn't exist, show helpful error message
    if ($e->getCode() == 1049) { // Unknown database error code
        die("
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 100px auto; padding: 30px; background: #f8f9fa; border-radius: 10px; text-align: center;'>
                <h2 style='color: #dc3545;'>Database Not Found</h2>
                <p style='color: #666; margin: 20px 0;'>The CR Dashboard database 'campusbuddy_cr' doesn't exist yet.</p>
                <p style='color: #666; margin: 20px 0;'>Please run the setup script first:</p>
                <a href='../cr_dashboard/setup.php' style='background: #007bff; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block; margin: 10px;'>Run Setup Script</a>
                <br><br>
                <a href='../Dashboard1/' style='background: #6c757d; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block; margin: 10px;'>Back to Dashboard</a>
            </div>
        ");
    } else {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
