<?php
    $first_name=$middle_name=$last_name=$full_name='';
    if(isset($_POST['btn'])) {
        echo'<pre>';
        print_r($_POST);

        $first_name=$_POST['first_name'];
        $middle_name=$_POST['middle_name'];
        $last_name=$_POST['last_name'];
        

        $full_name=$first_name.' '.$middle_name.' '.$last_name;
        
    }
    
        
        // switch('#inpt'){
        //     case 'add':

        // }
        if(isset($_POST['inpt'])) {
        $first_number=$last_number='';
        
            // print_r($_POST);
            $first_number=$_POST['first_number'];
            $last_number=$_POST['last_number'];
            $inpt = $_POST['inpt'];
            // $output='';
            
        switch($inpt){
            case '+':
                $output = $first_number + $last_number;
            break;
            case '-':
                $output = $first_number - $last_number;
            break;
            case '*':
                $output = $first_number * $last_number;
            break;
            case '/':
                $output = $first_number / $last_number;
            break;
            case '%':
                $output = $first_number % $last_number;
            break;
           
            
        }
    }
            
        

   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    #inpt{
        box-sizing: border-box;
        margin: 0;
       float: left;
    }
    </style>
</head>
<body>
    


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
            <td><input type="text" value="<?php echo $full_name; ?>"></td>
        </tr>
        
        
        <tr>
        <td></td>
        <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>

    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="first_number" value="<?php echo $first_number ?>"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="last_number" value="<?php echo $last_number ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="inpt"  value="+"></td>
            <td><input type="submit" name="inpt"  value="-"></td>
            <td><input type="submit" name="inpt"  value="*"></td>
            <td><input type="submit" name="inpt"  value="/"></td>
            <td><input type="submit" name="inpt"  value="%"></td> 
        </tr>
        <tr>
            <td>Output</td>
            <td><input type="text" name="output" value="<?php echo $output ?>"></td>
        </tr>
        
        
        
    </table>
</form>
</body>
</html>