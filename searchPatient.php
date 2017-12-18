<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UTeM Dental System</title>
    <link rel="shortcut icon" href="img/utemlogo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>


  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">UTeM Dental System</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="appointmentListReg.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registerPatient.php">Register Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listReg.php">Patient List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>

<section id="ListRegPart">
  <div class="container">
    <h3 class="text-center">Patient List</h3>
    <hr class="star-primary">


<br><br>

<center>
      <form id="search1" name="search1" action="searchPatient.php" method="post">
      <input type="text" name="valueToSearch" placeholder="Patient Name">&nbsp;&nbsp;
      <input type="submit" name="search" value="Search"><br>

</form>
</center>

<br><br>



<center>


<form id="frm1" name="frm1" action="searchPatient.php" method="post">


<?php
$link=mysqli_connect ("localhost", "root", "");
mysqli_select_db ($link, "dental");
?>

<table class="table table-stripped table-hover table-bordered">

<?php
if (isset ($_POST["search"]))
{
$res=mysqli_query($link,"select * from patient_info where name='$_POST[valueToSearch]'");
    echo "<tr><th>Patient Id</th>";
	  echo "<th>Name</th><th>Matric/Staff No</th>";
	  echo "<th>Faculty/Department</th><th>IC/Passport No</th>";
	  echo "<th>Position</th><th>Gender</th>";
    echo "<th>Citizen</th><th>Phone No</th>";
    echo "<th>Address</th><th>Patient Consent</th>";
    echo "</tr>";


 while($row = mysqli_fetch_assoc($res))
    {

        echo "<tr>";
        echo "<td>".$row['patient_id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['matric_staffno']."</td>";
        echo "<td>".$row['fac_dept']."</td>";
        echo "<td>".$row['ic_passno']."</td>";
        echo "<td>".$row['position']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['citizen']."</td>";
        echo "<td>".$row['phoneno']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['patient_consent']."</td>";

		echo "</tr>";
	}

echo "</table>";

}

?>


</center>


<br><br>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>