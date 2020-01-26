<?php

class calculator
{
    public $starting_number;
    public $ending_number;
    public $result;


    function __construct($firstNumber, $secondNumber)
    {
        $this->starting_number = $firstNumber;
        $this->ending_number = $secondNumber;
    }

    public function add()
    {
        return $this->result = $this->starting_number + $this->ending_number;
    }
    public function sub()
    {
        return $this->result = $this->starting_number - $this->ending_number;
    }
    public function mul()
    {
        return $this->result = $this->starting_number * $this->ending_number;
    }
    public function div()
    {
        return $this->result = $this->starting_number / $this->ending_number;
    }
    public function mod()
    {
        return $this->result = $this->starting_number % $this->ending_number;
    }
}



$starting_number = $ending_number = $res = '';
$starting_number = $_POST['starting_number'];
$ending_number = $_POST['ending_number'];

$cal = new calculator($starting_number, $ending_number);
if (isset($_POST['add'])) {

    $add = $cal->add();
    $res = $add;
} elseif (isset($_POST['sub'])) {

    $sub = $cal->sub();
    $res = $sub;
} elseif (isset($_POST['mul'])) {

    $mul = $cal->mul();
    $res = $mul;
} elseif (isset($_POST['div'])) {

    $div = $cal->div();
    $res = $div;
} elseif (isset($_POST['mod'])) {

    $mod = $cal->mod();
    $res = $mod;
} else {
    $res = 'Please enter values';
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>Calculator Using OOP</title>
</head>

<body>


    <form action="#" method="post">

        <table>
            <tr>
                <td>Starting Number</td>
                <td><input type="number" name="starting_number" value="<?php echo $starting_number; ?>"></td>
            </tr>
            <tr>
                <td>Ending Number</td>
                <td><input type="number" name="ending_number" value="<?php echo $ending_number; ?>"></td>
            </tr>
            <tr>

                <td>Result</td>
                <td><input type="number" name="result" value="<?php echo $res; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="add" value="+">
                    <input type="submit" name="sub" value="-">
                    <input type="submit" name="mul" value="*">
                    <input type="submit" name="div" value="/">
                    <input type="submit" name="mod" value="%">

                </td>
            </tr>

        </table>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>