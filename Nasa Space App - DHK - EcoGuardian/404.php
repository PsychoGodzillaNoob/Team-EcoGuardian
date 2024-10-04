<?php
// =============================================================================
// =============================================================================
// File Name: 404.php
// Description: Routing Failed will be redirectect to this file
// Programmer: "NightHowler"
// Powered By: Team EcoGuardians
// =============================================================================
// =============================================================================
// namespace EcoGuardians\Application\Routing;
if(isset($_GET['eodberr'])){
    // $_GET['eodberr'] => Exception Of Database Error
    $exeption = $_GET['eodberr'];
    echo "Application failed to Run. Due to".$exeption;
}else{
    echo "Application failed to Run. Contact To the Administration";
}
