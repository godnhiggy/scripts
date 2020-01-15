<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

<style>

table {
  border-collapse: collapse;
  margin: auto;
}
table, th, td {
  border: 1px solid black;
}

label {
color: #000000;
font-weight: bold;
display: block;
width: 200px;
float: left;
}
/*label:after { content: ": " }*/

.button {
  background-color: #2196F3;
  border: none;
  border-radius: 10px;
  color: black;
  padding: 15px 32px;
  text-align: center;
  cursor: pointer;
}

.item1 { grid-area: header;
        text-align: center;
}
.item2 { grid-area: left;
        text-align: right;
}
.item3 { grid-area: main;
        text-align: left;
}
.item4 { grid-area: right;
        text-align: center;
}
.item5 { grid-area: footer;
        text-align: center;
}
.item6 { grid-area: bottom;
        text-align: center;

}

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'left left main main right right'
    'footer footer footer footer footer footer'
    'bottom bottom bottom bottom bottom bottom';
  grid-gap: 2px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);

  padding: 20px 0;
  font-size: 20px;
}
</style>

</head>

<body>


<div class="grid-container">
  <div class="item1">
    PLC Admin HomePage
  </div>
  <div class="item2"></div>

  <div class="item3">
<form action="select.php" method="POST">
  <label for="lname">Team Name</label><input type="text" name="tname"><br>
  <?php
  $servername = "localhost";
  $username = "debian-sys-maint";
  $password = "bvjwgkcdZl64H808";
  $dbname = "plc";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  //installing a list to choose team members
  ?>
  <label for="tmembers">Last Name</label><select name="tmembers[]" multiple>
  <br>
  <?php
  $sql = "SELECT userName
  FROM users";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
            {

      // output data of each row
      while($row = $result->fetch_assoc()) {
         // $totalwordcount = str_word_count($row["essay"]);
          $userName = $row["userName"];
  ?>

    <option value=<?php echo $userName?>><?php echo $userName?></option>

  <?php

      }

   }

  else {

      echo "0 results";
  }

  ?>
  </select>  <br>


 <label for="leadSource">Lead Source</label>
    <select name="leadSource[]" multiple>
        <option value="farmers">Farmers</option>
        <option value="coldCall">Cold Call</option>
        <option value="friend">Friend</option>
        <option value="referral">Referral</option>
      </select>  <br>
    <label for="dateCreated">Date</label><input type="date" name="dateCreated"> <br>
    <label for="soldStatus">Sold Status</label>
    <select name="soldStatus">
        <option value="sold">Sold</option>
        <option value="pending">Pending</option>
        <option value="threeMonths">3 months</option>
        <option value="sixMonths">6 months</option>
      </select>  <br>
 <label for="soldCount">Sold Count</label><input type="number" name="soldCount"><br>
 <label for="quotedCount">Quoted Count</label><input type="number" name="quotedCount"><br>
 <label for="notes">Notes</label><input type="text" name="notes"><br>



  </div>
  <div class="item4">Links <p>under</p><p>construction</p></div>
  <div class="item5">
    <label for="submit"></label><input class="button" type="submit" value="Submit" name="submit">
   </form>
  </div>

  <div class="item6">
    <?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "bvjwgkcdZl64H808";
$dbname = "plc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

    //installing a list to choose team members
    ?>
    Time Keeper  <br>
    <select name="timeKeeper" size="2" multiple>
    <br>
    <?php
    $sql = "SELECT userName
FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
              {

        // output data of each row
        while($row = $result->fetch_assoc()) {
           // $totalwordcount = str_word_count($row["essay"]);
            $userName = $row["userName"];
    ?>

      <option value=<?php echo $userName?>><?php echo $userName?></option>

    <?php

        }

     }

    else {

        echo "0 results";
    }

    ?>
    </select>

  </div>
</div>

</body>
</html>
