<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="RadioButton.php" method="post">
        <label for="">Select Course</label><br>
        <input type="radio" value="Bsc" name="course"> Bsc <br>
        <input type="radio" value="BscCsit" name="course"> BscCsit <br>
        <input type="radio" value="BIT" name="course"> BIT <br>

        <input type="submit" name="confirm" value="Confirm">




    </form>


    <?php
       if(isset($_POTS['confim'])){
        $course = $_POST['course'];
        echo $course;
       }
    
    
    ?>
</body>
</html>