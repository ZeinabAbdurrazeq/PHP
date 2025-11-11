
 <?php
session_start();

if (isset($_SESSION['s_username'])) { 




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Already Logged In</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
    <a href="#.php"><i class="fa-solid fa-house">  </i><br> Home</a>
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
  <title>Login - RackIt</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #E4DFDA;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 35px 45px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
      width: 380px;
      text-align: center;
    }

    .login-container h2 {
      color: #2c3e50;
      margin-bottom: 5px;
    }

    .login-container h3 {
      color: #555;
      font-weight: normal;
      font-size: 15px;
      margin-bottom: 25px;
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
      transition: border-color 0.2s;
    }

    .input-group input:focus {
      border-color: #48A9A6;
    }

    .input-group i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #888;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background: #48A9A6;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s;
      margin-top: 5px;
    }

    .login-container button:hover {
      background: #66bcbaff;
    }

    .login-container .reset-btn {
      background: #7f8c8d !important;
    }

    .login-container .reset-btn:hover {
      background: #95a5a6 !important;
    }

    .login-container .link {
      margin-top: 15px;
      font-size: 14px;
    }

    .login-container .link a {
      color: #48A9A6;
      text-decoration: none;
      font-weight: bold;
    }

    .login-container .link a:hover {
      text-decoration: underline;
    }

    .login-container i {
      margin-right: 6px;
      color: #48A9A6;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2> RackIt</h2>
    <h3>One Place for All Your Devices</h3>
    <form method="POST" action="loginChecking.php">
      <div class="input-group">
        <input type="text" name="username" placeholder="Enter your username" required>
        <i class="fa-solid fa-user"></i>
      </div>

      <div class="input-group">
        <input type="password" name="password" placeholder="Enter your password" required>
        <i class="fa-solid fa-lock"></i>
      </div>

      <button type="submit"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
      <button type="reset" class="reset-btn"><i class="fa-solid fa-rotate-right"></i> Reset</button>
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
