
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'&& !empty($_POST['username'])&& !empty($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


    require_once 'connection.php';
    $selectUser=$connection->prepare('SELECT * FROM users WHERE username=?');
    $selectUser->execute([$username]);
    $user= $selectUser->fetch(PDO::FETCH_ASSOC);
//var_dump($user);

    if ($user && password_verify($password, $user['password'])) {
       session_start();
       $_SESSION['id'] = $user['id'];
       $_SESSION['fullname'] = $user['fullname'];
       $_SESSION['username'] = $user['username'];
       header('Location:index.php');
       exit();
    } 

    else{
       header('Location:login.php?errormessage=Invalid%20username%20or%20password');
    }
}
else{
    header('Location:login.php');
    exit();
}


// session_start();

// $users = [
//     'zeinab'  => "333",
//     'esraa' => "5678",
//     'salma' => "9999",
//     'omnia' => "1234",
//     'admin' =>  "123456"
// ];

// $user=$_POST['username'];
// $pass=$_POST['password'];

// if(array_key_exists($user,$users) && $pass === $users[$user]){
//         $_SESSION['username']=$user;
//         $_SESSION['password']=$pass;
//         header('location:list.php');
// }
// else{
//      echo " Access denied ";
//}
?>











