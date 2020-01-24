<?php 
    //$result='';//eida na dileo kaj korar kotha  hm
    //find ou t
    
    if(isset($_POST['btn'])) {
        echo '<pre>';
        print_r($_POST);

        $first_number=$_POST['first_number'];
        $second_number=$_POST['second_number'];
        $btn=$_POST['btn'];
        switch($btn) {
            case'+':
                $result=$first_number + $second_number;
            break;
            case'-':
                $result=$first_number - $second_number;
            break;
            case'*':
                $result=$first_number * $second_number;
            break;
            case'/':
                $result=$first_number / $second_number;
            break;
            case'%':
                $result=$first_number % $second_number;
            break;
        }
    }
   
    // $full_name=$first_name.' '.$middle_name


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
         <table>
             <tr>
                 <td>First Number</td>
                 <td><input type="number" name="first_number" value="<?php echo $first_number ?>"/></td>
             </tr>
             <tr>
                 <td>Second Number</td>
                 <td><input type="number" name="second_number" value="<?php echo $second_number ?>" /></td>
             </tr>
             <tr>
                 <td>Result</td>
                 <td><input type="text" value="<?php echo $result ?>"/></td>
             </tr>
             <td></td>
             <td>
                 <input type="submit" name="btn" value="+">
                 <input type="submit" name="btn" value="-">
                 <input type="submit" name="btn" value="*">
                 <input type="submit" name="btn" value="/">
                 <input type="submit" name="btn" value="%">
             </td>
         </table>
     </form>   




</body>
</html>