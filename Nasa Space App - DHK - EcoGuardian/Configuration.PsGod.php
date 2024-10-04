<?php
// =============================================================================
// =============================================================================
// File Name: Configuration.PsGod.php
// Description: Storing all Configuration related variable and Data
// Programmer: "PsychoGodzilla"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\Application\Configuration;
class Configuration_PsGod{
    public static function SystemVars($MODE){
        // $MODE will handle By OFF/ON value
        if($MODE && $MODE == 'ON'){
            define('BASE_URL','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/');
            define('GAME_ENGINE','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/GameEngine/');
            define('APPLICATION','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/Application/');
            define('CONTROLLER','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/Application/Controller/');
            define('MODEL','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/Application/Model/');
            define('VIEW','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/Application/View');
            define('THIRD_PARTY','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/ThirdParty/');
            define('ASSETS','http://localhost/_______WhoWannaBoss_______/EVENT/Nasa%20Space%20App%20-%20EcoGuardians/platform/Assets/');
            // define('','');
        }
    }

}