<?php
// $context = 'http://schema.org';
// $type = 'CreateAction';

// $encodedValue = '';

// if (isset($_POST['submit'])) {
//     $action = array();
//     $agentname = $_POST['agentname'];
//     $result = $_POST['result'];
//     $participant = $_POST['participant'];


//     $action = array(
//         '@context' => $context,
//         '@type' => $type,
//         'agent' => array(
//             '@type' => 'Person',
//             'name' => $agentname
//         ),
//         'result' => array(
//             '@type' => 'ExercisePlan',
//             'name' => $result
//         ),
//         'participant' => array(
//             '@type' => 'Person',
//             'name' => $participant
//         )
//     );
//     $encodedValue =  json_encode($action);
// }

// echo ++$abc;
echo json_encode($_POST);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>Json testing </title>
</head>

<body>

    <div class="container">
        <h3>Choose type</h3>
        <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Choose Type</a>
            <ul class="dropdown-menu bg-primary">
                <li><a href="json.php" class="nav-link">Action</a></li>
                <li><a href="aggregateRating.php" class="nav-link">Aggregate Rating</a></li>
                <li><a href="organization.php" class="nav-link">Organization</a></li>
            </ul>
        </li>
        <div class="type" id="Action">
            <h3>Schema for Aggregate Rating</h3>
            <div class="frm">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputName">Agent Name</label>
                        <input type="text" class="form-control" name="agentname" placeholder="Enter agent name">
                        <span id='nameError' style="color: red;"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputphone">Result</label>
                        <input type="text" class="form-control" name="result" placeholder="Enter result">
                        <span id="phoneError" style="color: red;"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputphone">Participant</label>
                        <input type="text" class="form-control" name="participant" placeholder="Enter participant name">
                        <label for="exampleInputabc">abc</label>
                        <input type="text" class="form-control" name="abc" placeholder="Enter value of abc">
                        <span id="phoneError" style="color: red;"></span>
                        <button type="submit" name="add" id="add" class="btn btn-primary">+</button>
                        <p id="addOrRemove"></p>
                        <button type="submit" name="remove" id="remove" class="btn btn-primary">-</button>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>

    </div>

    <div class="output">
        <div class="container">
            <h4><u>Output</u></h4>
            <p></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script>
        $("#add").click(function(event) {
            event.preventDefault();
            $("#addOrRemove").append(
                '<label for="exampleInputabc">abc</label><input type="text" class="form-control" name="<?php echo 'abc' . $abc += 1; ?>"</span>'
            );



            // first set a checking value limit. Then with the limit generate the append and use name field to the php. Then make child and parent hierarchy.

        });
        $("#remove").click(function(event) {
            event.preventDefault();

            $("#addOrRemove").remove();
            // Add logic for single item remove from the last 
        });
    </script>




</body>

</html>