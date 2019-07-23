<?php 
require('config/connect.php');
$query = "SELECT * from matches where result!=''" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
echo("<div style='width:90%;margin:0 auto;'>");
echo("<table class='centered' >");
echo "<thead><tr>";

echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Time</th>";
echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Team1</th>";
echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Result</th>";
echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Team2</th>";
//echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>WinOdd</th>";
echo "</tr></thead>";
while ($row = mysqli_fetch_array($result,true)) {
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        echo "<td><a class='white-text' ".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' ".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' ".$row['MID']."'>".$row['result']."</td>";
        echo "<td><a class='orange-text' ".$row['MID']."'>".$row['team_2']."</td>";
        //echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "</tr>";
}
echo("</table></div>");
//echo("<script>alert(1);</scirpt>");


 ?>