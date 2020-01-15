<!DOCTYPE html>
<?php
// connect to the database
$db = mysqli_connect('localhost', 'debian-sys-maint', 'bvjwgkcdZl64H808', 'plc');

//INSERT into the database
$query = "INSERT INTO plcMeeting (notes, attendance, day)
      VALUES('$notes', '$attendance', '$day')";

//run query
mysqli_query($db, $query);

//UPDATE into the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE users SET block='$aCountries[$i]' WHERE username='$aCountries[$i]'";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}

//INSERT COMPLEX array into database


?>

<html>
<body>
  <a href="https://www.w3schools.com/html/html_form_input_types.asp">Input Types W3Schools</a>
  <br>

<form action="/action_page.php" method="POST">

<h2>Text field</h2>
First name:
<br><input type="text" name="firstname">

<p>Note that the form itself is not visible.</p>
<p>Also note that the default width of a text field is 20 characters.</p>


<h2>Date Field</h2>
Birthday:
<input type="date" name="bday">


<h2>Submit Button</h2>
<input type="submit" value="Submit">






















</form>
</body>
</html>
