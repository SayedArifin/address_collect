<?php
include "./database.php"
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit here!</title>
</head>

<body>
    <div>
        <h1>Billing Address Collector</h1>
        <fieldset>
            <legend>Please Enter Your Address here</legend>
            <form action="./submitted_data.php" method="post">
                <label for="fname">Your Frist Name:</label>
                <input type="text" name="fname" placeholder="enter your frist name here">
                <br><br>
                <label for="lname">Your Last Name:</label>
                <input type="text" name="lname" placeholder="enter your last name here">
                <br><br>
                <label for="email">Your Email Address:</label>
                <input type="email" name="email" placeholder="enter your email address here">
                <br><br>
                <label for="gender">Your gender:</label>

                <input type="radio" id="male" name="gender" value="male">
                <label label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>

                <input type="radio" id="other" name="gender" value="other">
                <label for="other">other</label>
                <br><br>
                <label for="s_address">Your Street Address:</label>
                <textarea name="s_address" id="s_address" cols="40" rows="4"></textarea>
                <br><br>
                <label for="country">Your Country Name:</label>
                <input type="text" name="country" id="country" placeholder="enter your country name">
                <br><br>
                <label for="postal">Your Postle Code:</label>
                <input type="number" name="postle" id="postle">

                <br><br>
                <input type="submit" value="Submit the form">



            </form>
        </fieldset>

    </div>

</body>

</html>