<?php
// =============================================================================
// =============================================================================
// File Name: index.php
// Description: Root Index file to display user data in a table.
// Programmer: "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians;
//All error debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

use EcoGuardians\Application\Configuration\Configuration_PsGod as CONFIGURATION;
use EcoGuardians\Application\Controller\Controller_PsGod as CONTROLLER;
use EcoGuardians\Application\Model\Model_PsGod as MODEL;
use EcoGuardians\Application\View\View_PsGod as VIEW;

include_once "System.PsGod.php";

// Run the Configuration File
CONFIGURATION::SystemVars('ON');

// Database Connection
$db_connection = CONTROLLER::Run_Database('Run');

// Fetch user data from the controller
$userData = CONTROLLER::Run_User($db_connection);

//Initialize View
$VIEW = new VIEW();
// Pass the fetched data to the view to display it in a table
$VIEW ->PrintAllUserData($userData);
// $VIEW ->LevelDashboard();

// Close the database connection
mysqli_close($db_connection);