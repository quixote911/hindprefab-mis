v<html>
<body>
<img src="cover.gif" width="100%">
<?php
if (isset($_COOKIE["ID_my_site"]))
{
$con=mysqli_connect("127.0.0.1","root","","HPL");
$proj=$_POST["projro"];
$result = mysqli_query($con,"SELECT * 
FROM  `projects` 
WHERE  `REGIONAL OFFICE` ='$proj'
LIMIT 0 , 30");
echo "<table border='1'>
<tr>
<th>PROJECT NUMBER</th>
<th>PROJECT NAME</th>
<TH>CLIENT</TH>
<TH>CONTRACTOR</TH>
<TH>PROJECT COORDINATOR</TH>
<TH>REGIONAL OFFICE</TH>
<TH>REMARKS</TH>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['PROJECT NUMBER'] . "</td>";
  echo "<td>" . $row['PROJECT NAME'] . "</td>";
  echo "<td>" . $row['CLIENT'] . "</td>";
  echo "<td>" . $row['CONTRACTOR'] . "</td>";
  echo "<td>" . $row['PROJECT COORDINATOR'] . "</td>";
  echo "<td>" . $row['REGIONAL OFFICE'] . "</td>";
  echo "<td>" . $row['REMARKS/STATUS'] . "</td>";
  }
echo "</table>";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 setcookie("ID_my_site", "", time()-3600);
}
else
{
echo "session expired";
echo"
<a href=user.php> Click Here to Login Again</a>
";
} 
 
  ?>
 
