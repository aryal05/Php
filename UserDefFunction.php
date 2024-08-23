<?php 
echo 'User Defined Functions.. <br>';


/* 
     Function is a block of statements that can be resued
     in a program.
     1: function call
     :Function defination



*/

// $a = 12;
// $b = 8;
// $total = sum($a, $b);
// echo $total;


// function sum($num1, $num2)
// {
//     return $num1 + $num2 .'<br';

// }


// isset,empty function

// isset()
// Return TRUE, if a variable is declared and not null

// empty()
// Return TRUE, if a variable is not declared, false, null


?>

<?php 

// Example of isset()
$name = '';

if(isset($name)){
    echo 'Variable is Declared';

}else{
    echo 'Variable is not declared';
}

// Example of empty()

$name2 = 'Rajat';

if(isset($name)){
    echo 'Name is Declared';

}else{
    echo 'Name is not declared';
}







?>