<?php

$theObj->name = "Divine Droplets";
$theObj->overview = "Flawless yet incredibly persistent. The purity of the region of Yamagata shines in this sake, with the crispness of their pristine water, the grassy, spicy quality of dewasansan rice, and the opulent textures derived from shizuku free run finishing.";
$theObj->tasting_notes = "Refreshing and pure with notes of pineapple, white peach, green apple, lily and a hint of white pepper.";
$theObj->food_pairing = "Excellent paired with smoked salmon & cream cheese blinis, olive tapenade or vinegar tomato salad.";
$theObj->grade = "Junmai Daiginjo";
$theObj->seimaibuai = 50;
$theObj->rice = "Dewasansan";
$theObj->alcohol = 16;
$theObj->brewery_name = "GINGA SHIZUKU BREWERY";
$theObj->brewery_location = "Yamagata";

$theJSON = json_encode($theObj);

echo $theJSON;
?>
