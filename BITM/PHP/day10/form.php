<?php



$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];

echo $first_name.' '.$last_name;
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form action="#" method="POST">
        <table align="center">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>