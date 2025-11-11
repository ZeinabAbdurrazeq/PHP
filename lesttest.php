









<?php
//PDO PART
const DSN= "mysql:dbname=rackitdb; host=localhost";
const USER = "root";
const PASS= "";

try {

    $connection = new PDO(DSN, USER,PASS);
    $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $select = 'SELECT * FROM products';
    $query = $connection->prepare($select);
    $query->execute();
    $products =$query->fetchAll();
} catch (PDOException $ex) {
    die("Connection Failed:" . $ex->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products data</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
        }
        .img img{

            width:270px;
        }
        h2 {
            text-align: center;
            color: #0860edff;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px 15px;
            text-align: center;
        }
        th {
            background-color: #4e91b3ff;
            color: white;
        }
        td form {
            display: inline;
        }
        td form button {
            background: none;
            border: none;
            cursor: pointer;
        }

        tr:nth-child(even) {background-color: #f9f9f9;}
        tr:hover {background-color: #f1f1f1;}
    </style>
</head>
<body>

<h2>All products data</h2>
<button><a href="addProduct.php">ِِِAdd Product</a></button>
<button> <a href="login.php">Login</a> </button>
<button><a href="#">Home</a> </button> 
<?php
// if (isset($_GET['deleted'])) {
//     echo '<div style="color: white; background: #e74c3c; padding: 10px; width: 80%; margin: 20px auto; text-align: center; border-radius: 5px;">
//             Product deleted successfully!
//           </div>';
// }

// if (isset($_GET['updated'])) {
//     echo '<div style="color: white; background: #27ae60; padding: 10px; width: 80%; margin: 20px auto; text-align: center; border-radius: 5px;">
//             Product updated successfully!
//           </div>';
// }

// if (isset($_GET['added'])) {
//     echo '<div style="color: white; background: #2980b9; padding: 10px; width: 80%; margin: 20px auto; text-align: center; border-radius: 5px;">
//             Product added successfully!
//           </div>';
// }
?>

<!-- API PHP :Search-->
<table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>Brand</th>
        <th>Quantity</th>
        <th>Image</th>
        <!-- <th>Password</th>  <td>'.password_hash($user["password"],PASSWORD_DEFAULT).'</td> -->
        <th>Details</th>
    </tr>
    <?php if (!empty($products)) { 
          foreach ($products as $product){ 
            echo ' <tr>
                <td>'.$product["id"] .'</td>
                <td>'.$product["name"].'</td>
                <td>'.$product["brand"].'</td>
                <td>'.$product["quantity"].'</td>
                <td class="img">
                <img src="images/'.$product["image"].'" alt="'.$product["image"].'">
                </td>
                <td>
                    <a href="details.php?id='.$product["id"].'" target=_blank>
                         <i class="fa-solid fa-eye" style="color:black"></i>
                    </a>

                    <a href="edit.php?id='.$product["id"].'"><i class="fa-solid fa-pen-to-square" style="color:#0b557aff"></i></a>
                    <form action="delete.php" method="POST" onsubmit="return confirm(\'Are you sure you want to delete this product?\')">
                        <input type="hidden" name="id" value="'.$product["id"].'">
                        <button type="submit">
                            <i class="fa-solid fa-trash" style="color:#BC2B28"></i>
                        </button>
                    </form>

                </td>
            </tr> ';
         } 
     }
      ?>
</table>

</body>
</html>
