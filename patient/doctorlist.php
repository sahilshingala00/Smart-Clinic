<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Insert title here</title>
    <style type="text/css">
        .navbar-custom {

            font-weight: bolder;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-custom navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Smart Clinic</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="patient.php">Home</a></li>
                <li><a href="patient.php#contactus">Contact US</a></li>
                <li><a href="bookApp.php">Book an Appointment</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="listofApp.php">My Appointments</a></li>
                        <li><a href="pre.php">My bills</a></li>
                        <li><a href="myprofile.php">My History</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <center>
            <h1>OUR DOCTORS' TEAM </h1>
            <br><br>

            <div class="card" style="width:350px">
            <?php
                include('../dbcon.php');
                $sql="select * from doctor";
                $run=mysqli_query($con,$sql);
                while($data=mysqli_fetch_assoc($run))
                {
                    ?>
                        <img class="card-img-top" src="../dataimg/<?php echo $data['picture']; ?>" alt="Card image" style="width:100%;height:350px"><br><br>
                        <div class="card-body" style="border: 1px solid gray;border-top: 5px solid teal;">
                            <h1 class="card-title"><?php echo $data['name']; ?></h1>
                            <p class="card-text"><b>Address:</b> <?php echo $data['address']; ?></p>
                            <p class="card-text"><b>Email:</b> <?php echo $data['email']; ?></p>
                            <p class="card-text"><b>Phone:</b> <?php echo $data['phone']; ?></p>
                            <p class="card-text"><b>DOB:</b> <?php echo $data['dob']; ?></p>
                        </div>
                        <br>
                    <?php 
                }
            ?>
            </div>
        </center>
    </div>
</body>
</html>
