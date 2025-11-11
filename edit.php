
<?php
require_once 'connection.php';
$id = $_GET['id'];


$stmt = $connection->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $quantity = $_POST['quantity'];

    $image = $product['image']; 
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "images/";
        $image = $_FILES["image"]["name"];
        $targetFile = $targetDir . $image;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    }


    $update = $connection->prepare("UPDATE products SET name=?, brand=?, quantity=?, image=? WHERE id=?");
    $update->execute([$name, $brand, $quantity, $image, $id]);
     echo "<script>
        alert('Product updated successfully!');
        window.location.href='list.php?added=1';
    </script>";   
    header("Location: list.php?updated=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product | Rackit</title>

     <link rel="icon" type="image/png" href="./images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f9fb;
            font-family: 'Poppins', sans-serif;
        }
        /* .form-container {
            max-width: 650px;
            margin: 60px auto;
            background: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);


        } */
         .form-container {
            max-width: 650px;
            margin: 40px auto; 
            background: #fff;
            border-radius: 15px;
            padding: 25px 35px; 
           box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}
        .form-container h2 {
            text-align: center;
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px 15px;
        }
        .btn-custom {
            background-color: #48A9A6;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #3a8d8b;
        }
        footer {
            background: linear-gradient(135deg, #1f2937, #111827);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-top: 20px;
        }
        footer p {
            margin: 0;
            color: #ccc;
        }
        .img-preview {
            display: block;
            width: 140px;
            height: 140px;
            object-fit: cover;
            margin: 15px auto;
            border-radius: 10px;
            border: 3px solid #48A9A6;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2><i class="fa-solid fa-pen-to-square me-2"></i>Edit Product</h2>

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($product['name']) ?>" required>
        </div>

<div class="row">
  <div class="col-md-6 mb-3">
      <label class="form-label">Brand</label>
      <input type="text" name="brand" class="form-control" value="<?= htmlspecialchars($product['brand']) ?>" required>
  </div>

  <div class="col-md-6 mb-3">
      <label class="form-label">Quantity</label>
      <input type="number" name="quantity" class="form-control" value="<?= htmlspecialchars($product['quantity']) ?>" required>
  </div>
</div>


        <div class="mb-3 text-center">
            <!-- <label class="form-label">Current Image</label> -->
            <img src="images/<?= htmlspecialchars($product['image']) ?>" class="img-preview" alt="Current Image">
            <input type="file" name="image" class="form-control mt-3">
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-custom">
                <i class="fa-solid fa-check me-2"></i>Save Changes
            </button>
            <a href="list.php" class="btn btn-secondary ms-2">
                <i class="fa-solid fa-arrow-left me-2"></i>Cancel
            </a>
        </div>
    </form>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Rackit. All Rights Reserved.</p>
</footer>

</body>
</html>
