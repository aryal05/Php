<?php

echo 'Hello world';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>This is my php first</h1>

    <h2><?php echo 'This is the use of php inside html tag ' ?></h2>

    <h1>Variables in php:</h1>
</body>
</html>

<!-- /* 
# Variables

#DataTypes

*/ -->
<?php
// Way to initialize the vaiable
$variableName = 'Rajat';
$age = 20;
$marks = 89.98;
$isPass = true;

//Way to print the stored variable
echo 'My Name is = ' .$variableName;
echo '<br/> My Age is = '.$age;
echo '<br/> My marks is = '.$marks;
echo '<br/> My isPass = '.$isPass;
echo '<br/>';
var_dump($variableName);// to identify the type of the vaiable
echo'<br/>';

$a = 3;
$b=5;
$c = $a + $b; //Adition in Php Of two variable.

echo $a . '+' .$b . '=' . $c;  
// echo $c;


$c = 18;
$d=98;
$e= ++$d;// This is called Pre-Increment
echo $c .'<br></br>';
$c++; // Post Increment and for decrement --
echo $c .'<br></br>';


//OPERATOR PRECENDENCE
# ()
# **
# * / %
# + -


//FOR EXAMPLE
$total = 5/10 *7 +(45/2) **5;
echo 'Total = ' .$total .'<br></br>';
