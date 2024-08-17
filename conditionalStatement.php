<?php 

// If Conditional Statement
$age = 15;
if($age >= 18){
    echo 'You Can Vote';
}else{
    echo 'You cannot vote.. . <br></br>' ;
}


$hours = 40;
$rate = 40;
$weekly = 4;

if($hours == 0){
    $weekly = 0;
}

else if($hours<=40){
    $weekly = $hours * $rate;
}
echo 'Weekly Payment = ' . $weekly . ' $ ';


?>