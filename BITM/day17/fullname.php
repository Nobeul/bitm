<?php
    echo '<pre>';
   print_r($_POST);

    // $x='Rohim';
        echo isset($_POST['btn']);





//    $firstName = $_POST['first_name'];
//    $lastName = $_POST['last_name'];
//    $fullName = $firstName.' '.$lastName;
//    echo $fullName; 

?>

<form action="#" method="post"> 
    <table>
        <tr>
            <th>First Name</th>
            <th><input type="text" name="first_name"></th>
        </tr>
        <tr>
            <th>Last Name</th>
            <th><input type="text" name="last_name"></th>
        </tr>
        <tr>
            <th>Full Name</th>
            <th><input type="text" name="full_name"></th>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" name="btn" value="Submit"></th>
        </tr>


    </table>

</form>