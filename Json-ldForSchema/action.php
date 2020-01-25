<?php
$context = 'http://schema.org';
$type = 'CreateAction';

$encodedValue = '';

if (isset($_POST['submit'])) {
    $action = array();
    $agentname = $_POST['agentname'];
    $result = $_POST['result'];
    $participant = $_POST['participant'];


    $action = array(
        '@context' => $context,
        '@type' => $type,
        'agent' => array(
            '@type' => 'Person',
            'name' => $agentname
        ),
        'result' => array(
            '@type' => 'ExercisePlan',
            'name' => $result
        ),
        'participant' => array(
            '@type' => 'Person',
            'name' => $participant
        )
    );
    $encodedValue =  json_encode($action);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>Json testing </title>
</head>

<body>

    <div class="container">
        <h3>Choose type</h3>
        <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="action.php">Action</a>
                    <a class="dropdown-item" href="organization.php">Organization</a>
                    <a class="dropdown-item" href="aggregateRating.php">Aggregate Rating</a>

                </div>
            </div>
        </div>
        <div class="type">
            <h3>Schema for Action</h3>
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
                        <span id="phoneError" style="color: red;"></span>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- <div class="output">
        <div class="container" style="height: 500px; width: 500px; background: grey">
            <h4><u>Output</u></h4>
            <p style="color: white"><?php echo $encodedValue ?> </p>
        </div>
    </div> -->


    <div class="container" style="margin-top: 20px">
        <div>
            <h4><u>Output</u></h4>
            <p><?php echo $encodedValue ?> </p>
        </div>
    </div>
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