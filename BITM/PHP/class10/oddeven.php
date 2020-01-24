<?php 
    $result='';
    if(isset($_POST['btn'])) {
        echo '<pre>';
        print_r($_POST);

        $starting_number=$_POST['starting_number'];
        $ending_number=$_POST['ending_number'];
        $choice=$_POST['choice'];
        $result='';
        if($starting_number <= $ending_number){
            if($choice =='odd'){
                for($i=$starting_number; $i<=$ending_number; $i++){
                    if($i % 2!=0){
                        $result.=$i.' ';
                    }
                }
            } else {
                for($i=$starting_number; $i<=$ending_number; $i++){
                    if($i % 2==0){
                        $result.=$i.' ';
                    }
                }
            }
        
        } else {
            for($i=$starting_number; $i>=$ending_number; $i--){
                if($choice =='odd'){
                    if($i % 2!=0) {
                        $result.=$i.' '; 
                    }
                } else {
                    if($i % 2==0){
                        $result.=$i.' '; 
                    }
                }
            }
        } 
    }    


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
                 <td>Starting Number</td>
                 <td><input type="number" name="starting_number"/></td>
             </tr>
             <tr>
                 <td>Ending Number</td>
                 <td><input type="number" name="ending_number"/></td>
             </tr>
             <tr>
                 <td>Your Choice</td>
                 <td>
                 <input type="radio" name="choice" value="odd"/> Odd
                 <input type="radio" name="choice" value="even"/> Even
                </td>
             </tr>
                <tr>
                <td>Result</td>
                <td><textarea cols="40" rows="8"> <?php echo $result; ?> </textarea></td>
                </tr>
            <tr>
                <td></td>
             <td>
                 <input type="submit" name="btn" value="Submit" />
                 
             </td>
         </table>
     </form>   




</body>
</html>