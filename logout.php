
<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
session_regenerate_id();   //fixation
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="./images/icon.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      background: #E4DFDA;
      background: #ccc1b6ff;
      background: #D2BA9C;  
      background: #BFA77F;  
      background: #0B1B2B;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .logout-box {
      background: #fff;
      border: 2px solid #ddd;
      border-radius: 10px;
      padding: 30px 40px;
      text-align: center;
      /* box-shadow: 0 1px 1px  #cda00dff; */
      

    }
    .logout-box h2 {
      color: #2c3e50;
      margin-bottom: 15px;
    }
    .logout-box p {
      color: #555;
      margin-bottom: 20px;
    }
    .logout-box a {
      display: inline-block;
      padding: 10px 20px;
      background: #1b6292ff;
      background: #48A9A6; 
      background: #F2B602;
      color: #fff;
      color: #0B1B2B;
      text-decoration: none;
      border-radius: 5px;
      border:2px solid #0B1B2B;
      transition: 0.3s;
    }
    .logout-box a:hover {
      background: #4595caff;
      background: #edcf6cff;
    }
  </style>
</head>
<body>
  <div class="logout-box">
    <h2><i class="fa-solid fa-circle-check"></i> Logged Out</h2>
    <p>You have been logged out successfully.</p>
    <a href="login.php">Go to Login</a>
  </div>
</body>
</html>

<?php
// header("refresh:2; url=login.php");
?>
