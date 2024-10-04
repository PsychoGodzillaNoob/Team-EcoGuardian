<?php
// =============================================================================
// =============================================================================
// File Name: View.PsGod.php
// Description: Inner Structure Procudure of View of MVC Model
// Programmer: "PsychoGodzilla", "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\Application\View;
use EcoGuardians\Application\View\User\User as USER_VIEW;
use EcoGuardians\Application\View\LevelDashboard as LevelDashboard;
class View_PsGod{
    //Constructor
    public function __construct(){
        require "Application/View/Header/Header.PsGod.php";
    }
    public static function PrintAllUserData($userData) {
        include "Application/View/User/User.PsGod.php";
        echo USER_VIEW::PrintAllUserData($userData);
    }
    public static function LevelDashboard() {
        include "Application/View/LevelDashboard/LevelDashboard.PsGod.php";
        LevelDashboard::FrontendInterface();
    }
    //Destructor
    public function __destruct() {
        require "Application/View/Header/footer.php";
    }
}