<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="./images/icon.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #E4DFDA;
      background: #0B1B2B;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-container {
      background: #fff;
      padding: 35px 45px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.2);
      width: 380px;
      text-align: center;
    }

    .register-container h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .register-container form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .register-container input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      outline: none;
      transition: border-color 0.2s;
    }

    .register-container input:focus {
      border-color: #F2B602;
      
    }

    .register-container button {
      padding: 10px;
      background: #48A9A6;
      background: #F2B602;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s;
    }

    .register-container button:hover {
      background: #66bcbaff;
      background: #F2B602;
    }

    .register-container .link {
      margin-top: 10px;
      font-size: 14px;
    }

    .register-container .link a {
      color: #F2B602;
      text-decoration: none;
      font-weight: bold;
    }

    .register-container .link a:hover {
      text-decoration: underline;
    }

    .register-container i {
      margin-right: 6px;
      color: #F2B602;
    }
        .logo-img {
     width: 60px;
    border-radius: 50%;
}
 .login-container a{
  text-decoration:none;
}
.logo-link {
  /* display: flex; */
  align-items: center;
  justify-content: center;
  gap: 10px;
  text-decoration: none;
  color: inherit;
}

.logo-link h1 {
  margin: 0;
  color: #2c3e50;
}


.logo-link {
  /* display: flex; */
  align-items: center;
  justify-content: center;
  gap: 10px;
  text-decoration: none;
  color: inherit;
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
  box-shadow: 0 0 15px #F2B602;
}


  </style>
</head>
<body>
  <div class="register-container">
    <a href="index.php" class="logo-link">
  <img src="./images/icon.png" alt="RackIt Logo" class="logo-img">
  <h1>RackIT</h1>
</a>

    <!-- <h2><i class="fa-solid fa-user-plus"></i> Create Account</h2> -->
     <br>
    <form action="insertUser.php" method="POST">
      <input type="text" name="fullname" placeholder="Fullname" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      <button type="submit"><i class="fa-solid fa-user-check"></i> Register</button>
    </form>
    <div class="link">
      Already have an account? <a href="login.php">Login</a>
    </div>
  </div>
</body>
</html>
