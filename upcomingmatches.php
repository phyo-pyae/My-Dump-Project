<div style='width:90%;margin:0 auto;'>
<div class="input-field col s12">
  <form action="index.php" method="get">  
    <select name="flag">
      <option value="1">Popular</option>
      <option value="2">Date</option>
      <input type="hidden" name="pg" value="<?php 
$pg = 1 ;
if (isset($_GET['pg'])) {
  echo $_GET['pg'] ;
}else{
  echo $pg ;
}
?>">
    </select>
    <?php 

    if (isset($_GET['flag']) and $_GET['flag']==2) {
      echo "<label>Sorted By Date</label>";
    }else{
      echo "<label>Sorted By Popular</label>";
    }

     ?>
    <br><input style="margin: 0 auto;float: auto;padding: 10px;" class="btn-large waves-effect waves-light teal lighten-5" type="submit" name="sorted" value="Sort">
  </form>
  </div>
</div>  


 
<?php 
  echo("<div style='width:90%;margin:0 auto;'>");
  echo("<table class='centered' >");
  echo "<thead><tr>";

  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Time</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Team1</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Team2</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Odd1</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Draw</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Odd2</th>";

  echo "</tr></thead>";
  $rowcount = mysqli_num_rows($result);
  if ($rowcount>0 and $rowcount<=10) {
      $i = 0 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
  }
        echo("</table>");
        echo "</div>";
        echo "<div class='row'>
    <div class='col s12'>
      <ul class='tabs'>
        <li class='tab col s4'> <a href ='index.php?pg=1' class='blue-grey lighten-5 orange-text active' font-style='Verdana'>PAGE1</a> </li>
      </ul>
    </div>
<!--=    <div id='Page1' class='col s12'>Page1</div>
    <div id='Page2' class='col s12'>Page2</div>
    <div id='Page3' class='col s12'>Page3</div> -->
  </div>
";
  }else if ($rowcount>10 and $rowcount<=20) {
    //if () {
      # code...
    //}
    if (isset($_GET['flag']) and $_GET['flag']=='2' and $_GET['pg']==2) {
            //echo("<h1>Test1</h1>");
            $query  = "SELECT * from matches WHERE MID > 10 and result='' ORDER BY UNIX_TIMESTAMP(time) " ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 10 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
      }
    }else if(isset($_GET['pg']) and $_GET['pg']==1){
      //echo("<h1>Test2</h1>");
            $query  = "SELECT * from matches where result='' " ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 0 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==10) {
          break;
        }
  }
    }else{
            
            //echo("<h1>Test3</h1>");
            $query  = "SELECT * from matches WHERE result='' " ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 0 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==10) {
          break;
        }
  }
  
    }

        echo("</table>");
        echo "</div>";
        echo "<div class='row'>
   <div style='width:90%;margin:0 auto;'>     
    <div class='col s12'>
    
      <ul class='tabs'>
        <li class='tab col s4'> <a href ='index.php?pg=1' class='blue-grey lighten-5 orange-text active' font-style='Verdana'>PAGE1</a> </li>
        <li class='tab col s4'> <a href ='index.php?pg=2' class='blue-grey lighten-5 orange-text ' font-style='Verdana'>PAGE2</a> </li>
    
      </ul>
    </div>
  </div>
<!--=    <div id='Page1' class='col s12'>Page1</div>
    <div id='Page2' class='col s12'>Page2</div>
    <div id='Page3' class='col s12'>Page3</div> -->
  </div>
";
  }else if ($rowcount>20 and $rowcount<=30) {
    if (isset($_GET['flag']) and $_GET['flag']=='2' and $_GET['pg']==3) {
            //echo("<h1>Test1</h1>");
            $query  = "SELECT * from matches WHERE MID > 20 and result='' ORDER BY UNIX_TIMESTAMP(time) " ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 20 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
      }
    }else if(isset($_GET['pg']) and isset($_GET['flag']) and $_GET['pg']==2 and $_GET['flag']==2){
      //echo("<h1>Test786</h1>");
            $query  = "SELECT * from matches WHERE MID > 10 and MID < 21 and result='' order by UNIX_TIMESTAMP(time) " ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 10 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==20) {
          break;
        }
  }      
    }else if(isset($_GET['pg']) and $_GET['pg']==2){
      //echo("<h1>Test2</h1>");
            $query  = "SELECT * from matches WHERE MID > 10 and result=''  " ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 10 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==20) {
          break;
        }
  }
    }else if(isset($_GET['pg']) and $_GET['pg']==3){
            //echo("<h1>Test33</h1>");
            $query  = "SELECT * from matches WHERE MID > 20 /*and MID <=30*/ and result=''" ; 
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 0 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==10) {
          break;
        }
  }
  
    }else if(isset($_GET['pg']) and isset($_GET['flag']) and $_GET['pg']==1 and $_GET['flag']==2){
            //echo("<h1>iloveyou</h1>");
            //$query  = "SELECT * from matches " ; 
            $query  = "SELECT * from matches where MID<=10 and result='' ORDER BY UNIX_TIMESTAMP(time)" ;
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 0 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==10) {
          break;
        }
  }
    }else{
            //echo("<h1>Test200</h1>");
            //$query  = "SELECT * from matches " ; 
            $query  = "SELECT * from matches where result=''" ;
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            $i = 0 ;
      while ($row = mysqli_fetch_array($result,true)) {
        $i++;
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        
        echo "<td><a class='white-text' href='bet.php?id=".$row['MID']."'>".$row['time']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_1']."</td>";
        echo "<td><a class='orange-text' href='bet.php?id=".$row['MID']."'>".$row['team_2']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_1']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['draw']."</td>";
        echo "<td><a href='bet.php?id=".$row['MID']."'>".$row['odd_2']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
        if ($i==10) {
          break;
        }
  }
 
    }

        echo("</table>");
        echo "</div>";
        echo "<div class='row'>
   <div style='width:90%;margin:0 auto;'>     
    <div class='col s12'>
    
      <ul class='tabs'>
        <li class='tab col s4'> <a href ='index.php?pg=1' class='blue-grey lighten-5 orange-text active' font-style='Verdana'>PAGE1</a> </li>
        <li class='tab col s4'> <a href ='index.php?pg=2' class='blue-grey lighten-5 orange-text ' font-style='Verdana'>PAGE2</a> </li>
         <li class='tab col s4'> <a href ='index.php?pg=3' class='blue-grey lighten-5 orange-text ' font-style='Verdana'>PAGE3</a> </li>
    
      </ul>
    </div>
  </div>
<!--=    <div id='Page1' class='col s12'>Page1</div>
    <div id='Page2' class='col s12'>Page2</div>
    <div id='Page3' class='col s12'>Page3</div> -->
  </div>
";
  }
?>

 