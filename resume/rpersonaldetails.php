<?php
include_once '../dbconfigresume.php';
?>

<?xml version = "1.0"  encoding = "utf-8" ?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/1.css"/>

<head>
<style>

</style>


</head>
<body id="1">
  <header>
<video width="1525" height="250" autoplay muted loop id="myVideo">
  <source src="../1.mp4" type="video/mp4">
</video>
</header>



<ul>
  <li class="dropdown"><a href="../index.php">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Resume</a>
    <div class="dropdown-content">
      <a href="../resume/rcareer.php">Career Objective</a>
      <a href="../resume/rsummary.php">Summary</a>
      <a href="../resume/rresponsibilities.php">Responsibilities</a>
      <a href="../resume/rachievements.php">Achievements</a>
      <a href="../resume/rqualification.php">Qualification</a>
      <a href="../resume/rpersonaldetails.php">Personal Details</a>
    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Curriculum Vitae</a>
    <div class="dropdown-content">    
      <a href="../cv/csummary.php">Summary</a>
      <a href="../cv/cexperience.php">Experience</a>
      <a href="../cv/cresponsibilities.php">Responsibilities</a>
      <a href="../cv/cachievements.php">Achievements</a>
      <a href="../cv/ceducation.php">Education</a>
      <a href="../cv/cprojectdetails.php">Project Details</a>
      <a href="../cv/ccocurricular.php">Co-Curricular Activities</a>
      <a href="../cv/cpersonaldetails.php">Personal Details</a>
    </div>
  </li>


<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Bio-Data</a>
    <div class="dropdown-content">
      <a href="../bio/bpersonaldetails.php">Personal Details</a>
      <a href="../bio/beducation.php">Education</a>
      <a href="../bio/bexperience.php">Experience</a>
    </div>
  </li>

</ul>


<div class="row">
  <div class="column side">
    <h2>PERSONAL DETAILS</h2>
    <?php

$sql = "SELECT PERSONALDETAILS FROM PERSONALDETAILS";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  if($row = $result->fetch_assoc()) 
  {
    echo "Present Address : ".$row["PERSONALDETAILS"]."<br/><br/>" ;
  }
  if($row = $result->fetch_assoc())
  {
    echo "DOB :".$row["PERSONALDETAILS"]."<br/><br/>" ;
  }
    if($row = $result->fetch_assoc())
  {
    echo "Languages Known : ".$row["PERSONALDETAILS"]."<br/><br/>" ;
    
  }
} else {
  echo "0 results";
}
$con->close();
?>



    
  </div>
  


  <div class="column middle">
    <h2>Resume</h2>
    
<iframe src="resume.pdf" height="800" width="800"  title="Iframe Example"></iframe>  
</div>
  
 
</div>


</body>
</html>
