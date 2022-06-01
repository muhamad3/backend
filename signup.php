<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Sign in</h1>
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
    align-content: center;
    text-align: center;
    width: 100%;
    height: 40px;
    font-family: $font-family;
    -webkit-appearance: none;
    
    border: 0;
    color: white;
    background: darkcyan;
    transition: 0.3s;
    
    &:hover {
        background: darken($color-primary, 5%);
    }
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
    
    &:hover {
        background: darken($color-primary, 5%);
    }
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
            <input type="text" placeholder="Username" class="form__input" name="username" />
        </div>
        
        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" name="email" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="password" />
        </div>
        
        <input class="btn" type="submit" name="Register">
        <br>
        <div class="btn1" style="padding-top: 10px;">
       <a href="index.php" style="text-decoration: none;color: white;display: block;">Sign in</a> </div>
    </form>
         
</div>
<?php 

if (isset($_POST['email']) && $_POST['username'] != null && $_POST['username'] != null && $_POST['username'] != null) {
    $name= $_POST['username'];
    $email= $_POST['email'];
    $pass= $_POST['password'];
    $pass =filter_var($pass,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    $pass= convert_uuencode($pass);
    $name =filter_var($name,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    $email =filter_var($email,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    
$email = filter_var($email,FILTER_SANITIZE_EMAIL);

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
$sql = "INSERT INTO `test`(`username`, `email`, `password`) VALUES ('$name','$email','$pass')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>