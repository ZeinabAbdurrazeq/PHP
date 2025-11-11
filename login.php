
 <?php
session_start();

if (isset($_SESSION['id'])) { 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Already Logged In</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

 <link rel="icon" type="image/png" href="./images/icon.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #605B56, #837A75);
      background:#E4DFDA;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .already-logged {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
      text-align: center;
      width: 360px;
    }

    .already-logged h2 {
      color: #2c3e50;
      margin-bottom: 15px;
    }
    .link-group {
      display: flex;
      justify-content: center;
      gap: 1px; 
      margin-top: 15px;
}
    .already-logged a {
      display: inline-block;
      margin: 4px;
      padding: 10px 10px;
      background: #3498db;
      background: #48A9A6;
      width:90px;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;

    }

    .already-logged a:hover {
      background: #2980b9;
      background: #66bcbaff;
    }
    .already-logged i {
      margin-right: 6px;
    }
  </style>
</head>
<body>
  <div class="already-logged">
    <h2><i class="fa-solid fa-user-check"></i> You are already logged in</h2>
    <div class="link-group" >
    <a href="index.php"><i class="fa-solid fa-house">  </i><br> Home</a>
    <a href="list.php"><i class="fa-solid fa-gauge"></i><br> Products</a>
    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><br> Logout </a>
    </div>
  </div>
</body>
</html>


<?php
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RackIt</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", Arial, sans-serif;
      background: #E4DFDA;
      background: #0B1B2B;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 40px 45px;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      width: 380px;
      text-align: center;
      position: relative;
    }

    .login-container h2 {
      color: #2c3e50;
      margin-bottom: 5px;
      font-weight: 600;
    }

    .login-container h3 {
      color: #777;
      font-weight: normal;
      font-size: 15px;
      margin-bottom: 25px;
    }

    /* Error Message Styling */
    .error-message {
      background: #ffebee;
      color: #b71c1c;
      border: 1px solid #ef9a9a;
      padding: 12px;
      border-radius: 6px;
      text-align: center;
      margin-bottom: 15px;
      font-size: 14px;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-8px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .input-group {
      position: relative;
      margin-bottom: 18px;
    }

    .input-group input {
      width: 85%;
      padding: 12px 40px 12px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      background: #F5F7FA;
      
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    .input-group input:focus {
      border-color: #F2B602;
      box-shadow: 0 0 6px rgba(72, 169, 166, 0.3);
    }

    .input-group i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #888;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s, transform 0.1s;
      margin-top: 5px;
    }

    button:active {
      transform: scale(0.98);
    }

    .btn-login {
      background: #F2B602;
      color: #fff;
    }

    .btn-login:hover {
      background: #F2B602;
    }

    .btn-reset {
      background: #7f8c8d;
      color: #fff;
    }

    .btn-reset:hover {
      background: #95a5a6;
    }

    .link {
      margin-top: 15px;
      font-size: 14px;
    }

    .link a {
      color: #F2B602;
      text-decoration: none;
      font-weight: bold;
    }

    .link a:hover {
      text-decoration: underline;
    }
    .logo-img {
     width: 60px;
    border-radius: 50%;
}
.login-container a{
  text-decoration:none;
}
/*============================*/
.logo-link {
  display: flex;
  flex-direction: column; 
  align-items: center;
  text-decoration: none;
  color:#0B1B2B ;
}

.logo-link h1 {
  margin: 0;
  padding: 0;
}


.logo-link h2 {
  margin: 0;
  color: #2c3e50;
  font-weight: bold;
}

.logo-img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: 3px solid #030b35ff;
  padding: 3px; 
  background-color: #fff; 
  box-shadow: 0 0 10px rgba(72, 169, 166, 0.3); 
  transition: transform 0.3s, box-shadow 0.3s;
}

.logo-img:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px #F2B602 ;
}
  </style>
</head>
<body>
  <div class="login-container">
    <a href="index.php" class="logo-link">
  <img src="./images/icon.png" alt="RackIt Logo" class="logo-img">
 <h1>RackIT</h1>
</a>    
    <h3>One Place for All Your Devices</h3>

 <!-- error msg  -->
<?php 
if (isset($_GET['errormessage'])) {
  echo '<div class="error-message"><i class="fa-solid fa-circle-exclamation"></i> ' 
    . htmlspecialchars($_GET['errormessage']) . '</div>';
}
?>


    <form method="POST" action="loginChecking.php">
      <div class="input-group">
        <input type="text" name="username" placeholder="Enter your username" required>
        <i class="fa-solid fa-user"></i>
      </div>

      <div class="input-group">
        <input type="password" name="password" placeholder="Enter your password" required>
        <i class="fa-solid fa-lock"></i>
      </div>

      <button type="submit" class="btn-login">
        <i class="fa-solid fa-right-to-bracket"></i> Login
      </button>

      <button type="reset" class="btn-reset">
        <i class="fa-solid fa-rotate-right"></i> Reset
      </button>
    </form>

    <div class="link">
      Don't have an account? <a href="register.php">Register here</a>
    </div>
  </div>
</body>
</html>
<?php
}
?>