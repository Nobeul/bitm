<?php
    echo'<pre>';
    print_r($_POST);

    $first_name=$_POST['first_name'];
    $middle_name=$_POST['middle_name'];
    $last_name=$_POST['last_name'];
    

    $full_name=$first_name.''.$middle_name.''.$last_name;
    echo $full_name;

    

   



?>



<form action="" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td><input type="text" name="middle_name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text"></td>
        </tr>
        
        
        <tr>
        <td></td>
        <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>    