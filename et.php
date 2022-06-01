<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamesforsale</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
 .listi:not(#first):hover{
    background-color: seagreen;
    --a:rgb(0, 66, 61); }
    .listi:not(#first):hover .dropbtn{
    background-color: seagreen;}
.listi:not(#first){
    display: block ;
    width: 100px;
    height: 40px;
    background-color: var(--color);
    --a:var(--color);
}
    #first{
        background-color: var(--a);
    }
        :root{
 --color:rgb(0, 66, 61);
 --a:seagreen;

}
.container{
    list-style-type: none;
    display: block;
    padding: 0;
    margin: 0;
}
.container .listi{
    display: block;
    float: left;
    margin-right:   1px;
    width: 100px;
    height: 40px;
    text-align: center;
}


.container .listi:hover{
    --a:seagreen; 
}
*{
    color: whitesmoke;
}
.cats{
    height: 60px;
    display: flex;
    flex: column;
    background: linear-gradient(90deg,black,var(--color),black);
    text-decoration: bold;
    }
.cats:hover{
    --a:rgb(0, 66, 61); 
}
   
    .header{
        background-color: var(--color);
        margin: 0px;
        color: whitesmoke;
        position: sticky;
        top: 0;
    } 
    .content{
       display: flex;
       flex: row;
    }
    .title{
        text-align: center;
        height: 50px;
        font-size: xx-large;
        padding-top: 10px;
        background: linear-gradient(90deg,black,var(--color),black);
    }
    h1{
        padding-top: 20px;
    }
    img{
        border-radius: 10%;
    }
    .reco{
        text-align: center;
        background-color: var(--color);
        margin-top: 2%;
        width: 100%;
        height: 200px;
        border-radius: 40px;
        padding-left: 10px;
    }
    body{
        background-image: url(pic/patterin4.jpg ) ;
        background-repeat:no-repeat ;
        background-size: cover;
    }
    img{
        padding-bottom: 10px;
    }
    video{
        margin-top: 10px;
    }
    a{    
        text-decoration: black;
        color: whitesmoke;
    }

    .pics{
        margin-right: 30px;
        margin-top: 17px;        
    }
   
    button{
        background-color: var(--color);
        color: whitesmoke;
        width: 220px;
        margin-top: 10px;
        border-radius: 35px;
    }
    button:hover{
        background-color:seagreen ;
    }

  .grid-item{
   width: 220px;
   height: 300px;
   background-color: var(--color);
    display: inline-grid;
    margin-left: 40px;
    margin-top: 40px;
    margin-bottom: 20px;
    padding: 30px;
    border-radius: 40px;
    text-align: center;
    }
     .grid-item:hover{
      animation: ani 2s 0s linear infinite both;
    
  } 
  @keyframes ani {
    10%{
       transform:  translateY(-1%);
    }
    50%{
      background-color: rgb(4, 82, 38);
    }}

@media only screen and (min-width: 600px) {

  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}


</style>
</head>
<body>
<b>
    <em>
    <div class="header">
        <div class="title">
    HD Store
    </div>

    <div class="cats">
    <ol class="container">
        <li  id="first" class="listi" ><a href=""> home page</a></li>
        <li id="fourth" class="listi"><a href="controlpanel.php">view all games</a>  </li>
        <li id="seventh" class="listi"> <a href="index.php"> Log out</a></li>
        
    </ol>
    </div>

    </div>
    </em></b>
   
    <div >
        
        <div class="grid-item"> <img  src="pic/r.jpg"> <br> name:Rainbow 6 &nbsp; &nbsp;  &nbsp;price:30$
            <br>  console:all &nbsp;  &nbsp; &nbsp;    made by:ubisoft <br>
            <button onclick="getname('1');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r1.jpg"> <br> name:Uncharted 4 &nbsp; &nbsp;  &nbsp;price:20$
            <br>  console:Ps4 &nbsp;  &nbsp; &nbsp;    made by:Rocstar <br>
            <button onclick="getname('3');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r2.jpg"> <br> name:Last of Us II &nbsp; &nbsp;  &nbsp;price:25$
            <br>  console:Ps4 &nbsp;  &nbsp; &nbsp;    made by:ps <br>
            <button onclick="getname('5');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r3.jpg"> <br> name:Last of Us I &nbsp; &nbsp;  &nbsp;price:15$
            <br>  console:Ps4 &nbsp;  &nbsp; &nbsp;    made by:ps <br>
            <button onclick="getname('4');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r4.jpg"> <br> name:Call of Duty 
            <br>  console:all &nbsp;  &nbsp; &nbsp;    made by:EA <br>
            <button onclick="getname('2');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r5.jpg"> <br> name:Jumanji
            <br>  console:Xbox &nbsp;  &nbsp; &nbsp;    made by:Epic <br>
            <button onclick="getname('6');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r6.jpg"> <br> name:Spaider Man 
            <br>  console:Ps4 &nbsp;  &nbsp; &nbsp;    made by:XMan <br>
            <button onclick="getname('7');">BUY</button></div>
        <div class="grid-item"> <img  src="pic/r7.jpg"> <br> name:Fast Furious
            <br>  console:Xbox &nbsp;  &nbsp; &nbsp;    made by:ubisoft <br>
            <button onclick="getname('8');">BUY</button></div>

            <form id="myForm" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <input id='i' type='hidden' name='id'/>
          </form>

          <script>

 function getname(id){
  document.getElementById("i").setAttribute('value',id);
  document.getElementById("myForm").submit();
  
  var result = "<?php 
if (isset($_POST['id'])) {

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

$sql = "SELECT * FROM game where id=".$_POST["id"];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo 'name:  '.$row["name"].'             price:  '.$row["price"].'$';
    

  }
}

}?>";

 alert(result);
} 


</script>

</body>
</html>
