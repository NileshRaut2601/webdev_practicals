<!-- Create Student Registration Form with Validation using JavaScript. Also Style the form
using CSS.
Show a success message after successful validation.
● Name
● Email
● Password

● Confirm Password
● Phone Number -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" onsubmit="return ConfirmPass()" name="myform">
        <input type="text" name="pass" placeholder="Enter your password">
        <input type="text" name="cofirm" placeholder="Confirm Password">
        <button type="Submit">Submit</button>

    </form>

    <script>
        function ConfirmPass(){
        let pass=document.forms['myform']['pass'];
        let confirm=document.forms['myform']['confirm'];
        if (pass != confirm){
            alert("Wrong Password");
            return false;
        }
        }
        return true;
    </script>
</body>
</html>


