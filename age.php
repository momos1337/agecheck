<?php
/*
    - Age Check -
Coded By 4LM05TH3V!L
Github : github.com/momos1337
IndoSec - Hidden Ghost Team
*/
function ageCheck(){
/*Input Year*/
    echo "Tahun Lahir   : ";
    $getYear = trim(fgets(STDIN));
/*Validate Only INT*/
    if(strval($getYear) !== strval(intval($getYear)) ) {
        die("Harus Angka!\n");
      }
/*Current Year*/
    $currentYear = date("Y");
/* Born Year (-) Current Year*/
    $after = $getYear-$currentYear;
/*Replace (-) */
    $output = str_replace("-","",$after);
/*Output*/
    echo "Umur Sekarang : $output Tahun\n";
}
echo ageCheck();
?>
