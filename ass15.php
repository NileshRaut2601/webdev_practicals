<!-- Create a PHP script to Store subject marks in an array and display maximum marks and
student percentage. -->

<?php
    $arr=[12,23,12,54,12,54];
    $max=0;
    for($i=0;$i<count($arr);$i++){
        if($max<$arr[$i]){
            $max=$arr[$i];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>
    <?php
        echo "Topper has marks: ".$max;
        
    ?>
</h1>
</body>
</html>