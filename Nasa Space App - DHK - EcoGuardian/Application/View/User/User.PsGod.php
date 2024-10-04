<?php
// =============================================================================
// =============================================================================
// File Name: View/User/User.PsGod.php
// Description: Display user data in a table format.
// Programmer: "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\Application\View\User;

class User {

    // Function to display user data in a table
    public static function PrintAllUserData($userData) {
        if (empty($userData)) {
            echo "<p>No user data found.</p>";
            return;
        }
        include_once "Application/View/User/template/UserTable.basic.php";
    }
}
