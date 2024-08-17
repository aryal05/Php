<?php 


$fruits = array('apple','Orange','Banana','Pineapple');

$fruits[0] = "Apples";

// PreDefined Function of array in PHP
array_push($fruits, 'Coconut'); // Add the element 
array_pop($fruits); //Deletes the last index item
array_shift($fruits); //Deletes the first index item

foreach($fruits as $fruit){
    echo $fruit . '<br>';
}



//Associative array - An array with key => value pair

$employer = array(
           'Aryal' => 'FullStack Developer', 
            'Raja' => 'React Native Developer',
            'Omkar' => 'Flutter', 
             'Rajat ARYA' => 'Swift Developer'); 

// $keys = array_keys($employer); // to find the keys of the value
// $values = array_values($employer);
$employees= array_flip($employer); // to interchange the keys and value



?>

<?php 
foreach($employees as $key => $value){



?>
<p><b><?php echo $key  ?>:</b> <?php echo $value ?> </p>
<?php } ?>


<?php
//MultiDimentional Array

$info =array(
    'Rajat_Data' => array('name' => "Rajat", 'class' => 'BSc'),
    'Omkar_Data' => array('name' => "Omkar", 'class' => 'BIT'),
    'Biplab_Data' => array('name' => "Biplab", 'class' => 'BCS'),
    'Bipan_Data' => array('name' => "Bipan", 'class' => 'Nursing'),


);
foreach($info as $key => $value){
    echo '<pre>';
    print_r($value);
}

?>