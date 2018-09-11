<?php
$con = mysqli_connect('localhost','root','jackblack1','MPA_LLC1');
if (!$con) {
    die('Could not connect: ');
}


$sql= "SELECT * FROM Employees WHERE employees_id IS NOT NULL ORDER BY lastname asc, firstname asc";
$result = mysqli_query($con, $sql);
//$data = mysqli_fetch_assoc($result);
echo "
<br>
<table>
<tr class='tablecolor'>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>ID </th>
<th>Position </th>
<th>Date of Employment</th>
<th>Salary</th>

</tr>";

while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['employees_workid'] . "</td>";
echo "<td>" . $row['position'] . "</td>";;
echo "<td>" . $row['date_entered'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "</tr>";
}
echo "</table>";


mysqli_close($con);
?>
