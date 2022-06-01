<!DOCTYPE html>
<html lang="en">
<head>
  <title>control panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
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
            if ($row['up']) {
              echo "<div class='row' style='display: flex; align-items: center;justify-content: center; margin-top:25px ;'>
      <div class='col-sm-9'>
          <div class='well'>
          <h4>update</h4>
          id:  ".$row['id']."&emsp;&emsp;
name:<input type='text' id='namei' name='name' value=".$row['name'].">&emsp;&emsp;price:<input type='text'  id= 'pricei' name='price' value=".$row['price'].">&emsp;&emsp; platform:<input id='pi' type='text' name='p' value=".$row['platform']."> 
<button onclick='submit(".$row['id'].")'>submit</button></div></div></div>";
            }
           
  }
}   

$conn->close();
?>
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
    id:  ".$row['id']."           |               name : ".$row['name']." 
     <button style='float:right;'onclick='delet(".$row['id'].");'>delete</button>
     <button style='float:right;'onclick='edit(".$row['id'].");'>details</button>
     <button style='float:right;'onclick='up(".$row['id'].");'>update</button>
            </div></div></div>";
            if ($row['edit']) {
              echo "
              <div class='row' style='display: flex; align-items: center;justify-content: center; margin-top:25px ;'>
      <div class='col-sm-9'>
          <div class='well'><h4>Details</h4>
              id:  ".$row['id']."  &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;  name : ".$row['name']."   &nbsp;&nbsp;&nbsp; |   &nbsp;&nbsp;&nbsp;   price:  ".$row['price']."$         &nbsp;&nbsp;&nbsp;   |   &nbsp;&nbsp;&nbsp;            platform : ".$row['platform']." </div></div></div>";
            }
           
  }
}   

$conn->close();
?>
&nbsp;
<form id="myForm" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <input id='i' type='hidden' name='id'/>
            <input id='ie' type='hidden' name='ide'/>
            <input id='iu' type='hidden' name='idu'/>
          </form>
           <form id="myForm1" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <input id='up' type='hidden' name='up'/>
            <input id='name' type='hidden' name='name'/>
            <input id='price' type='hidden' name='price'/>
            <input id='p' type='hidden'  name='p'/>
          </form>
          <div class='row' style='display: flex; align-items: center;justify-content: center; margin-top:25px ;'>
          <a href="index.php"><button>go back</button></a></div>
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
$sql = 'DELETE FROM game WHERE id='.$_POST['id'];
$result = $conn->query($sql);
  
}
?>";

  }
  function edit(id){
  document.getElementById("ie").setAttribute('value',id);
  document.getElementById("myForm").submit();
  
  var result = "<?php
  if (isset($_POST['ide'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM game";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
  while($row = $result->fetch_assoc()) {
    if ($_POST['ide']==$row['id']) {

   if ($row['edit']==0) {
 $sql = 'UPDATE `game` SET `edit`=1 WHERE id='.$_POST['ide'] ;
 $conn->query($sql);
   }else if($row['up']==1){
     $sql = 'UPDATE `game` SET `edit`=0 WHERE id='.$_POST['ide'] ;
 $conn->query($sql);};
 }else{
  $sql = 'UPDATE `game` SET `edit`=0 WHERE id='.$row['id'] ;
 $conn->query($sql);}

}// the while
} // the first if
} //  isset
?>";
}

 function up(id){
  document.getElementById("iu").setAttribute('value',id);
  document.getElementById("myForm").submit();
  
  var result = "<?php
  if (isset($_POST['idu'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM game";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

    if ($_POST['idu']==$row['id']) {

   if ($row['up']==0) {
 $sql = 'UPDATE `game` SET `up`=1 WHERE id='.$_POST['idu'] ;
 $conn->query($sql);
   }else if($row['up']==1){
     $sql = 'UPDATE `game` SET `up`=0 WHERE id='.$_POST['idu'] ;
 $conn->query($sql);};

 }else{
  $sql = 'UPDATE `game` SET `up`=0 WHERE id='.$row['id'] ;
 $conn->query($sql);};
 


}// the while
} // the first if
} //  isset
?>";
} //function
 function submit(id){

  let name = document.getElementById("namei").value; 
  let price = document.getElementById("pricei").value; 
  let platfrom = document.getElementById("pi").value; 
  alert('information updated to         name:'+name+'             price:'+price+'           platfrom:'+platfrom);

  document.getElementById("name").setAttribute('value',name);
  document.getElementById("price").setAttribute('value',price);
  document.getElementById("p").setAttribute('value',platfrom);
  document.getElementById("up").setAttribute('value',id);

  document.getElementById("myForm1").submit();
  
  var result = "<?php
  if (isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['p'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM game";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

  $sql = "UPDATE `game` SET `name`='". $_POST['name'] ."',`price`='". $_POST['price'] ."',`platform`='". $_POST['p'] ."' WHERE id=". $_POST['up'];
 $conn->query($sql);
 


}// the while
} // the first if
} //  isset
?>";
} 
  
</script>

</body>
</html>
