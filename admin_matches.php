
<?php 
require('config/auth.php') ;
require('config/connect.php') ;

$query = "SELECT * from feedback as f left join register as r on `r`.`uid`=`f`.`uid` union select * from feedback as f right join register as r on `r`.`uid`=`f`.`uid` limit 2" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 


if (!isset($_SESSION['admin_key'])) {
	echo("<script>alert('you r not loginned in as admin plz logout and do admin login');</script>");
	echo "<script>location='index.php'</script>" ;
}

echo "
<!-- Modal Trigger -->
  <a class='btn-large waves-effect waves-light deep-orange accent-3 modal-trigger' href='#modal1'>ADD MATCH</a>
  <a class='btn-large waves-effect waves-light deep-orange accent-3 modal-trigger' href='#modal2'>DELETE MATCHs</a>
  <a class='btn-large waves-effect waves-light deep-orange accent-3 modal-trigger' href='#modal3'>Update MATCH Result</a>
  <a class='btn-large waves-effect waves-light deep-orange accent-3 modal-trigger' href='#modal4'>Show Users' FeedBack</a>

  <!-- Modal Structure -->
  <div style='height:100%' id='modal1' class='modal'>
    <form action='index.php' method='get'>
    <div class='modal-content'>
      <h4 class='amber-text text-darken-4'>Add New Match</h4>
      <label for='time' class='orange-text'>Date and Time</label>
      <input id='time' name='time' class='orange-text' type='text' placeholder='enter date and time'>

      <label for='team1' class='orange-text'>Team1</label>
      <input id='team1' name='team1' class='orange-text' type='text' placeholder='enter team name'>

      <label for='team2' class='orange-text'>Team2</label>
      <input id='team2' name='team2' class='orange-text' type='text' placeholder='enter team name'>

      <label for='odd1' class='orange-text'>Odd1</label>
      <input id='odd1' name='odd1' class='orange-text' type='text' placeholder='enter Odd1'>
      <label for='odd2' class='orange-text'>Odd2</label>
      <input id='odd2' name='odd2' class='orange-text' type='text' placeholder='enter Odd2'>
      <label for='draw' class='orange-text'>Draw</label>
      <input id='draw' name='draw' class='orange-text' type='text' placeholder='enter Draw Odd'>            
    </div>
    <div class='modal-footer'>
      <button type='submit' name='option' value='addmatch' class='modal-close btn-large waves-effect waves-light deep-orange accent-3'><i class='material-icons right'>send</i>Add Match</button>
      <button href='#' class='modal-close btn-large waves-effect waves-light deep-orange accent-3'><i class='material-icons right'>send</i>Cancel</button>
    </div>
    </form>
  </div>


  <!-- Modal Structure -->
  <div style='height:100%' id='modal2' class='modal'>
    <form action='index.php' method='get'>
    <div class='modal-content'>
      <h4 class='amber-text text-darken-4'>Delete Match</h4>
      <label for='mid' class='orange-text'>Match ID</label>
      <input class='orange-text' id='mid' type='text' name='mid' placeholder='Enter Match ID'>
    </div>
    <div class='modal-footer'>
      <button type='submit' name='option' value='deletematch' class='modal-close btn-large waves-effect waves-light deep-orange accent-3'><i class='material-icons right'>send</i>Delete Match</button>
      <button href='#' class='modal-close btn-large waves-effect waves-light deep-orange accent-3'><i class='material-icons right'>send</i>Cancel</button>
    </div>
    </form>
  </div>

  <!-- Modal Structure -->
  <div style='height:100%' id='modal3' class='modal'>
    <form action='index.php' method='get'>
    <div class='modal-content'>
      <h4 class='amber-text text-darken-4'>Update Match Result</h4>
      <label id='mid' class='orange-text'>Match ID</label>
      <input name='mid' class='orange-text' type='text' id='mid' placeholder='Enter Match id'>

      <label id='result' class='orange-text'>Result</label>
      <input name='result' class='orange-text' type='text' id='result' placeholder='Enter result'>
    </div>
    <div class='modal-footer'>
      <button type='submit' name='option' value='updatematchresult' class='modal-close btn-large waves-effect waves-light deep-orange accent-3'><i class='material-icons right'>send</i>Update Match Result</button>
      <button href='#' class='modal-close btn-large waves-effect waves-light deep-orange accent-3'><i class='material-icons right'>send</i>Cancel</button>
    </div>
    </form>
  </div>

  <!-- Modal Structure -->
  <div style='height:100%' id='modal4' class='modal'>
      <div class='modal-content'>
      <h4 class='amber-text text-darken-4'>FeedBack Information</h4>
      </div>
   <table class='centered'>
      <tr class='amber darken-4'>
        <td class='white-text'>UserName</td>
        <td class='white-text'>Description</td>
      </tr>
      ";
      while ($row = mysqli_fetch_array($result,true)) {
 echo     "
      <tr class='grey darken-4'>
        <td class='orange-text'>".$row['username']."</td>
        <td class='orange-text'>".$row['feedback']."</td>
      </tr>

";
      }
      echo "<div class='modal-footer'></div>   </table>
  </div><br><br><br>" ;

 	  //$query = "SELECT * from matches as m  left join bet as b on m.MID=b.MID " ;
 	  $query 	= "SELECT * from matches" ;
 	  $result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
  echo("<div style='width:90%;margin:0 auto;'>");
  echo("<table class='centered' >");
  echo "<thead><tr>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Match ID</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Time</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Team1</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Team2</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Odd1</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Draw</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Odd2</th>";
  echo "<th class='waves-light amber darken-4 white-text' font-style='Verdana'>Result</th>";

  echo "</tr></thead>";

 	  while ($row = mysqli_fetch_array($result,true)) {
//yellow lighten-1
        echo "<tr class='grey darken-4'>";
        //echo "<td>" . $row['MID'] . "</td>";
        echo "<td class='white-text'>".$row['MID']."</td>";
        echo "<td class='white-text'>".$row['time']."</td>";
        echo "<td class='orange-text'>".$row['team_1']."</td>";
        echo "<td class='orange-text'>".$row['team_2']."</td>";
        echo "<td class='blue-text'>".$row['odd_1']."</td>";
        echo "<td class='white-text'>".$row['draw']."</td>";
        echo "<td class='blue-text'>".$row['odd_2']."</td>";
        echo "<td class='orange-text'>".$row['result']."</td>";
        //echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
  }
  		echo "</table></div>";
      if (isset($_GET['option'])) {
        $option = $_GET['option'] ;
        if ($option=='addmatch' and $_GET['team1']!='' and $_GET['team2']!='' and $_GET['time']!='' and $_GET['odd1']!='' and $_GET['odd2']!='' and $_GET['draw']!='' ) {
          $team_1   = $_GET['team1'] ;
          $team_2   = $_GET['team2'] ;
          $timee    = $_GET['time']  ;
          $odd_1    = $_GET['odd1']  ;
          $odd_2    = $_GET['odd2']  ;
          $Draw     = $_GET['draw']  ;
          $query = "INSERT INTO `matches`( `team_1`, `team_2`, `time`, `result`, `odd_1`, `odd_2`, `draw`) VALUES ('$team_1','$team_2','$timee','','$odd_1','$odd_2','$Draw')" ;
          mysqli_query($conn,$query) or die(mysqli_error($conn));
          echo("<script>alert('Successfully Added the match')</script>");
          echo("<script>location='index.php'</script>");
        }else if($option=='updatematchresult' and $_GET['mid']!='' and $_GET['result']!=''){
          $mid      = $_GET['mid'] ;
          $result   = $_GET['result'] ;
          //step update match resulut
          $query = "UPDATE `matches` SET `result` = '$result' WHERE `matches`.`MID` = $mid";
          mysqli_query($conn,$query) or die(mysqli_error($conn));
          
          //send notification to user who betted the match for update result win or lose

          $arr = explode ("-",$result );
          if ($arr[0]>$arr[1]) {
            //step 2
            $query = "SELECT * from matches as m right outer join bet as b ON `m`.`MID`=`b`.`MID` where `m`.`MID`='$mid' " ;
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($result,true)) {
              $outputuid = $row['UID'] ;
              $outputmid = $row['MID'] ;
              $message  = "Team 1 win - Team 2 lose";
              $fflag    = 1 ;
              $query = "INSERT INTO `message`( `UID`, `MID`, `message`) VALUES ('$outputuid','$outputmid','$message')" ;
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            }   
          }else if($arr[0]<$arr[1]){
            //step 2
            $query = "SELECT * from matches as m right outer join bet as b ON `m`.`MID`=`b`.`MID` where `m`.`MID`='$mid' " ;
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            
            while ($row = mysqli_fetch_array($result,true)) {
              $outputuid = $row['UID'] ;
              $outputmid = $row['MID'] ;
              $message  = "Team 2 win - Team 1 lose";
              $fflag    = 2 ;
              $query = "INSERT INTO `message`( `UID`, `MID`, `message`) VALUES ('$outputuid','$outputmid','$message')" ;
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            }
          }else{
            //step 2
            $query = "SELECT * from matches as m right outer join bet as b ON `m`.`MID`=`b`.`MID` where `m`.`MID`='$mid' " ;
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            
            while ($row = mysqli_fetch_array($result,true)) {
              $outputuid = $row['UID'] ;
              $outputmid = $row['MID'] ;
              $message  = "Draw result";
              $fflag    = 0 ;
              $query = "INSERT INTO `message`( `UID`, `MID`, `message`) VALUES ('$outputuid','$outputmid','$message')" ;
              mysqli_query($conn,$query) or die(mysqli_error($conn));
            }
          }


          echo("<script>alert('Successfully Updated the match result')</script>");
          echo("<script>location='index.php'</script>");       

          



        }else if($option=='deletematch' and $_GET['mid']!=''){
          $mid      = $_GET['mid'] ;
          $query = "DELETE from matches where MID='$mid'" ;
          mysqli_query($conn,$query) or die(mysqli_error($conn));
          echo("<script>alert('Successfully Deleted the match')</script>");
          echo("<script>location='index.php'</script>");          
        }else{

        }
      }
 ?>


 