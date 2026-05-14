<!-- Write a PHP program to create a Project Competition Registration Form that accepts
user input and displays the submitted details using the POST method. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    </style>
</head>
<body>
    <div class="container">
    <form method='POST'>
         <h3>Project Competition Registration Form</h3>
         <div class="section">
            <input type='text' name="Name" placeholder="Enter your name"></input>
            <input type='email' name="Email" placeholder="Enter your EMail"></input>
            <input type='number' name="age" placeholder="Enter your age"></input>
            <input type='text' name="ClgName" placeholder="Enter your college name"></input>
            <div class=button>
            <button type='submit' id='submit'>submit</button>
            </div>
         </div>
    </form>
    </div>
    
</body>
</html>
<?php
if (isset($_POST['Name'])){
    $name=$_POST['Name'];
    $Email=$_POST['Email'];
    $age=$_POST['age'];
    $clg=$_POST['ClgName'];
    echo "Student Name: ".$name;
    echo "<br>Email: ".$Email;
    echo "<br>Age: ".$age;
    echo "<br>College: ".$clg;

}
?>