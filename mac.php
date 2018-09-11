<?php
$con = mysqli_connect('localhost','root','jackblack1','MPA_LLC1');
if (!$con) {
    die('Could not connect: ');
}



$sql= "SELECT * FROM Clients";
$result = mysqli_query($con, $sql);
//$data = mysqli_fetch_assoc($result);

echo "

<table class='tstyle'>
<tr class='tablecolor'>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Product</th>
<th>Gender </th>
<th>Address</th>
<th>City </th>
<th>State</th>
<th>Vendor</th>
<th>Deals Made</th>
</tr>";

while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['seller'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['employment'] . "</td>";
echo "<td>" . $row['deal_made'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo "</div>";
mysqli_close($con);
?>



