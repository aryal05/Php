<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="RadioButton.php" method="post">
        <!-- <label for="">Select Course</label><br>
        <input type="radio" value="Bsc" name="course"> Bsc <br>
        <input type="radio" value="BscCsit" name="course"> BscCsit <br>
        <input type="radio" value="BIT" name="course"> BIT <br>

        <input type="submit" name="confirm" value="Confirm">
 -->


       <label for=""><b>Food Items</b></label> <br>
       <input type="checkbox" name="foods[]" value="FastFood">FastFood <br>
       <input type="checkbox" name="foods[]" value="Sweets"> Sweets <br>
       <input type="checkbox" name="foods[]" value="Namkeen"> Namkeen <br>
       <input type="checkbox" name="foods[]" value="Vegies"> Vegies <br>
        

       <input type="submit" value="Confirm" name="confirm">



    </form>


    <?php
    //    if(isset($_POST['confirm'])){
    //     $course = $_POST['course'];
    //     echo $course;
    //    }
    
   if(isset($_POST['confirm'])){
    $foods = $_POST['foods'];
    echo $foods;
   }
    
    ?>
</body>
</html>