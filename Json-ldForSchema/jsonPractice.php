<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title> Form using Jquery</title>
</head>

<body>

    <div class="container">

        <div class="frm" style="margin-top: 30px;">
            <form action="" method="GET">
                <div class="form-group">
                    <label for="exampleInputName">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your name">
                    <span id='nameError' style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputphone">Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter your phone">
                    <span id="phoneError" style="color: red;"></span>
                </div>

                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
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

    <script>
        //username checker function. true if limit within  3-20 characters available
        function userNameChecker() {
            var nameLength = $('#username').val().length;
            if (nameLength >= 3 && nameLength <= 20) {
                $('#nameError').text('');
            } else {
                $('#nameError').text('Name can be within 3 to 20 characters');
            }
        }

        $('#username').keyup(function () {
            userNameChecker();
        });

        $('#username').blur(function () {
            userNameChecker();
        });


        //phone number checker function. true if 11 characters available
        function phoneNumberChecker() {
            var phoneLength = $('#phone').val().length;
            if (phoneLength == 11) {
                $('#phoneError').text('');
            } else {
                $('#phoneError').text('Phone number has to be 11 characters');
            }
        }

        //Method to check if required at time of clicking
        // $("#phone").click(function () {
        //     phoneNumberChecker();
        // });
        $("#phone").keyup(function () {
            phoneNumberChecker();
        });

        $("#phone").blur(function () {
            phoneNumberChecker();
        });
    </script>
</body>

</html>