<?php
// =============================================================================
// =============================================================================
// File Name: Controller.PsGod.php
// Description: Main Controller File for Managing all Controller Functions
// Programmer: "PsychoGodzilla", "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\Application\Controller;

use EcoGuardians\Application\Controller\Database\DatabaseInner;
use EcoGuardians\Application\Controller\User\User_PsGod as USER_CONTROLLER;
class Controller_PsGod {
    public static function Database($MODE, $ShowMessage) {
        if ($MODE == 'ON') {
            include "Application/Controller/Database/Database.PsGod.php";
            return DatabaseInner::DB_Run('Initiate', $ShowMessage);
        }
    }
 public static function Run_Database($MODE) {
        if ($MODE == 'Run') {
            // Run the database controller and return the connection
            return SELF::Database('ON', 'Yes');
        }
    }
    public static function Run_User($db_connection) {
        include "Application/Controller/User/User.PsGod.php";
        return USER_CONTROLLER::GetUserData($db_connection);
    }
}
