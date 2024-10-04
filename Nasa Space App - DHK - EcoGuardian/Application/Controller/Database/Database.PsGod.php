<?php
// =============================================================================
// =============================================================================
// File Name: Database.PsGod.php
// Description: Storing all Database Configuration and handling connection.
// Programmer: "PsychoGodzilla", "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\Application\Controller\Database;

class DatabaseInner {

    // Database connection setup
    protected static function DB_Data() {
        define('HOST', 'localhost'); // Database host name
        define('USER', 'root');      // Database username
        define('PASS', '');          // Database password
        define('DB', 'ecoguardians_climate_master'); // Database name
    }

    // Function to run the connection
    public static function DB_Run($MODE, $ShowMessage) {
        // Initialize database credentials
        SELF::DB_Data();

        // Create connection
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            if ($MODE == 'Initiate' && $ShowMessage == 'No') {
                echo "Database Successfully Connected to System.<br>";
            }
        }

        return $conn;
    }
}