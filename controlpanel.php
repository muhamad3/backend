<!DOCTYPE html>
<html lang="en">
<head>
  <title>control panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php
		require 'search.php';
	?>
  <style>    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>
<br>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM game";
$result = $conn->query($sql);
$id =5;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='row' style='display: flex; align-items: center;justify-content: center; margin-top:25px ;'>
      <div class='col-sm-9'>
          <div class='well'>
    id:  ".$row['id']."           |               name : ".$row['name']."             |      price:".$row['price']."$       |      platform:".$row['platform']."
            </div></div></div>";
          
  }
}   

$conn->close();
?>
&nbsp;
<form id="myForm" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <input id='i' type='hidden' name='id'/>
            <input id='ie' type='hidden' name='ide'/>
          </form><div class='row' style='display: flex; align-items: center;justify-content: center; margin-top:25px ;'>
          <a href="et.php"><button>go back</button></a></div>
<script  type="text/javascript">
  function delet(id){
  document.getElementById("i").setAttribute('value',id);
  document.getElementById("myForm").submit();
  
  
  var result = "<?php
  if (isset($_POST['id'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = 'DELETE FROM test WHERE id='.$_POST['id'];
$result = $conn->query($sql);
  
}
?>";
  }
  function edit(id){
  document.getElementById("ie").setAttribute('value',id);
  document.getElementById("myForm").submit();
  
  var result = "<?php
  if (isset($_POST['ide'])) {
echo $_POST['ide'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";
$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT * FROM games";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
   if ($_POST['ide']==$row['id'] && $row['edit']==0) {
 $sql = 'UPDATE `test` SET `edit`=1 WHERE id='.$_POST['ide'] ;
 $conn->query($sql);

   }else if($_POST['ide']==$row['id'] && $row['edit']==1){
     $sql = 'UPDATE `test` SET `edit`=0 WHERE id='.$_POST['ide'] ;
 $conn->query($sql);
   }
   ;
  }
  }
}   
?>";

}

  
</script>

</body>
</html>
