<?php
include "db.php";
global $conn;
session_start();
if (! empty($_SESSION["username"])) {
    $name = $_SESSION["username"];
} else {
    session_unset();
    $url = "./index.php";
    header("Location: $url");
}
session_write_close();
?>

<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"
	crossorigin="anonymous">
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="vendor/fontawesome-free-5.15.3-web/css/all.css"
	rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

    
}
.table>thead{
background:#f8f9fa;
} 
.form-group label {
    float: left;
    text-align: left;
    font-weight: normal;
}

.form-group select {
    display: inline-block;
    width: auto;
    vertical-align: middle;
}
</style>
</HEAD>

<BODY class="">
    <div class="container">
        
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">CAMPUS QR SYSTEM</a>
  <form class="form-inline">
<?php echo "Login:" . $name;?><br>
<a href="https://thepahal.org/campusqr/">Logout</a>
</form>
</nav>

      <table class="table table-responsive-md">
  <thead>

   <tr>
 <td> Scan Time </td>
   <td> Name </td>
   <td> Section </td>
   <td> Scan Location </td>
</thead>

<form action="" class="form-inline" method="post">
<div class="form-group">
  <label>Sector Name:
<select class="form-control" name="rname">
<?php
$resources = "SELECT locationname from qr";
$resour1 = $conn->query($resources);

while($row = $resour1->fetch_assoc())
{
echo "<option value='$row[locationname]'>" . $row['locationname'] . "</option>";
}
?>
</select>
  </label> 

</div> 
    <span></span><button type="submit" class="btn btn-primary" style="margin-left: 5px;"> Submit</button>

  </form>
      
      
</br>
</br>
<?php
$sql = "select DISTINCT b.date ,a.name,a.section,c.locationname from userreg a INNER JOIN scandata b on a.mail=b.mail INNER JOIN qr c on  c.qrid = b.qrid where c.locationname='".$_POST['rname']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
   <tr>
    <td><?php echo $row["date"]?> </td>
   <td><?php echo $row["name"] ?></td>
   <td><?php echo $row["section"]?> </td>
   <td><?php echo $row["locationname"]?> </td>
 </tr>
   <tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</table>

</div>
</BODY>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="#"> ALOK B</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</HTML>
