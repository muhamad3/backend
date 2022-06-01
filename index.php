<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Login in</h1>
        <style type="text/css">
            $font-family:   "Roboto";
$font-size:     14px;

$color-primary: #ABA194;

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: $font-family;
    font-size: $font-size;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
    height: 100vh
}

.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
    font-size: $font-size;
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}

.form {
    margin-top: 40px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    
    &:focus {
        background: darken(#fff, 3%);
    }
}
.btn1 {
    display: block;
    width: 100%;
    height: 40px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: darkcyan;
    transition: 0.3s;
    
}
.btn {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: gray;
    transition: 0.3s;
    
}

@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}
        </style>
    </header>
    
    <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" name="email" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="password" />
        </div>
        
        <input class="btn" type="submit" name="login" value="Login">
        <br>
        <div class="btn1" style="padding-top: 10px; text-align: center;">
       <a href="signup.php" style="text-decoration: none;color: white;display: block;">Sign up</a> </div>

       <div class="btn1" style="padding-top: 10px; text-align: center; margin-top: 10px;">
       <a href="admin.php" style="text-decoration: none;color: white;display: block;">Simple control panel </a> </div>

       <div class="btn1" style="padding-top: 10px; text-align: center; margin-top: 10px;">
       <a href="http://localhost:8000/admin" style="text-decoration: none;color: white;display: block;">framework control panel </a> </div>
     </form>   
</div>
<?php
if (isset($_POST['email']) && isset($_POST['password'])) {

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

$email = $_POST['email'];
$password = $_POST['password'];
$email =filter_var($email,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
$password =filter_var($password,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
$password =convert_uuencode($password);

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
   if ($email==$row["email"] && $password == $row['password']) {
    header("Location:et.php");
}
  }
}


$conn->close();
}

?> 