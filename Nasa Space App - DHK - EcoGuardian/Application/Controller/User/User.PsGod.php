<?php
// =============================================================================
// =============================================================================
// File Name: Controller/User/User.PsGod.php
// Description: Fetch user data from the database using general MySQL functions.
// Programmer: "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\Application\Controller\User;

use EcoGuardians\Application\Controller\Database\DatabaseInner;

class User_PsGod {

    // Function to fetch all user data from the database using MySQL
    public static function GetUserData($conn) {
        // SQL Query to fetch all user data
        $sql = "SELECT * FROM `user` WHERE 1";
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if (mysqli_num_rows($result) > 0) {
            // Fetch all rows as an associative array
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
