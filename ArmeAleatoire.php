<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];
switch ($opponentWeapon){
    case 'fists':
    $indyWeapon = "gun";
    break;
    case 'whip':
    $indyWeapon = "fists";
    break;
    case 'gun':
    $indyWeapon = "whip";
    break;
    default:
    $indyWeapon = " ";
    break;
}
echo 'Arme adversaire ' .$opponentWeapon. ' arme Indiana Jones ' .$indyWeapon;
?>
