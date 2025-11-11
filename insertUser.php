<?php 

function clear($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fullname = clear($_POST['fullname']);
    $username = clear($_POST['username']);
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = clear($_POST['email']);

    require_once 'connection.php';
    // prepare to prevent sql injection
    $insertStmt = $connection->prepare("INSERT INTO users (fullname, username, password, email) VALUES (?,?,?,?)");
    $insertStmt->execute([ $fullname, $username, $password,  $email ]);

    // $check = $connection->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
    // $check->execute([$username]);
    // $exists = $check->fetchColumn();
    // if ($exists > 0) {
    // echo "Username already exists. Please choose another one.";
    // exit;
// }

    header('Refresh:2;url=login.php');
    // echo"Success Registration";
}
else {
  header("location: register.php");
  exit;
}
?>

