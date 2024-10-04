<?php
// =============================================================================
// =============================================================================
// File Name: GameEngine.PsGod.php
// Description: Game Runtime Backend Engine to Process Scene within Background
// Programmer: "PsychoGodzilla", "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
namespace EcoGuardians\GameEngine;
class Takku_Sadiq{
    public static function Er_Engine_e_Kerosin_Dhalo($FuelAmount){
        // If $MODE => '2.25L Kerosin' then Start The Game Engine
        if($FuelAmount && $FuelAmount == '2.25L Kerosin'){
            echo '<div style="width: 255px;background:chartreuse;">============================';
            echo '<br>===<marquee style="width: 200px;">🤗🤗Game Engine Started!🤗🤗</marquee>===';
            echo '<br>============================<br></div>';
        }else{
            echo '<div style="background:red;width: 255px;">============================';
            echo '<br>===<marquee style="color:white;width: 200px;">🤮🤮Yaak!I do Vomiting🤮🤮 & 🤬🤬Calling To 999🤬🤬</marquee>===';
            echo '<br>============================<br></div>';
        }
    }
}