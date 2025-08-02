<?php
session_start();
$se = $_SESSION['em'];
if ($se == null) {
    header("location:home.php?msg=plz login first");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bikin - HTML Bootstrap Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/overwrite.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
</head>

<body style="height:100%;background-image:url(img/cricket_ball_in_the_grass-2560x1600.jpg); background-size:cover;background-attachment:fixed;">
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Cricket Club</a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="admin.php">Admin</a></li>
                        <li><a href="addcoach.php">Add Coach</a></li>
                        <li><a href="view.php">View Coach / Player</a></li>
                        <li><a href="time1.php">Time table</a></li>
                        <li><a href="plan.php">Game Plans</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <center>
        <div class="container"><br><br><br><br><br>
            <div style="width:900px;height:830px;background-color:rgba(10,0,0,0.3);">
                <br>
                <h1>Add Coach details</h1>
                <div class="col-lg-12">
                    <form id="coachForm" action="addcoachcon.php" method="post">
                        <input type="text" class="form-control" name="t1" id="name" placeholder="Enter your Name" style="width:400px"><br>
                        <input type="email" class="form-control" name="t2" id="email" placeholder="Enter Your mail Id" style="width:400px"><br>
                        <input type="text" class="form-control" name="t3" id="address" style="width:400px" placeholder="Enter your Address"><br>

                        <span style="font-size:20px;">Male:
                            <input type="radio" name="t4" value="male"> Female:
                            <input type="radio" name="t4" value="female">
                        </span><br><br>

                        <input type="text" class="form-control" name="t5" id="aadhar" style="width:400px" placeholder="Enter your Aadhar ID"><br>
                        <input type="text" class="form-control" name="t6" id="mobile" style="width:400px" placeholder="Enter your Mobile no."><br>
                        <input type="text" class="form-control" name="t7" id="experience" style="width:400px" placeholder="Enter your working Experience/training"><br>
                        <input type="text" class="form-control" name="t8" id="lastPlace" style="width:400px" placeholder="Enter your Last working place"><br>
                        <input type="text" class="form-control" name="t9" id="certification" style="width:400px" placeholder="If any medal /certification or etc.."><br>
                        <input type="password" class="form-control" name="t10" id="password" style="width:400px" placeholder="Enter password"><br>

                        <select style="width:400px" class="form-control" name="t11" id="specialist">
                            <option disabled>Specialist</option>
                            <option value="batsman">Batsman</option>
                            <option value="bowling">Bowling</option>
                            <option value="field">Fielding</option>
                            <option value="allrounder">All Rounder</option>
                            <option value="health">Health care</option>
                        </select><br>

                        <select class="form-control" name="t12" id="level" style="width:400px">
                            <option disabled>Playing Level</option>
                            <option value="state">State Level</option>
                            <option value="national">National Level</option>
                            <option value="international">International Level</option>
                        </select><br>
                        <input type="submit" class="btn btn-warning" style="width:200px">
                    </form>
                </div>
            </div>
        </div>
    </center>

    <script>
        document.getElementById("coachForm").addEventListener("submit", function (event) {
            let valid = true;
            let messages = [];

            // Getting form field values
            const name = document.forms["coachForm"]["t1"].value.trim();
            const email = document.forms["coachForm"]["t2"].value.trim();
            const gender = document.forms["coachForm"]["t4"].value;
            const aadhar = document.forms["coachForm"]["t5"].value.trim();
            const mobile = document.forms["coachForm"]["t6"].value.trim();
            const password = document.forms["coachForm"]["t10"].value.trim();

            // Name validation
            if (name === "") {
                messages.push("Name is required.");
                valid = false;
            }

            // Email validation
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                messages.push("Enter a valid email address.");
                valid = false;
            }

            // Gender validation
            if (!document.querySelector('input[name="t4"]:checked')) {
                messages.push("Please select a gender.");
                valid = false;
            }

            // Aadhar validation (example: 12-digit number)
            if (!/^\d{12}$/.test(aadhar)) {
                messages.push("Enter a valid 12-digit Aadhar number.");
                valid = false;
            }

            // Mobile number validation (10 digits)
            if (!/^\d{10}$/.test(mobile)) {
                messages.push("Enter a valid 10-digit mobile number.");
                valid = false;
            }

            // Password validation (at least 6 characters)
            if (password.length < 6) {
                messages.push("Password must be at least 6 characters long.");
                valid = false;
            }

            // Prevent form submission if invalid
            if (!valid) {
                event.preventDefault();
                alert(messages.join("\n"));
            }
        });
    </script>

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/fliplightbox.min.js"></script>
    <script src="js/functions.js"></script>
</body>

</html>
