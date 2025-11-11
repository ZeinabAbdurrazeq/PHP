<?php
function clear($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = clear($_POST['name']);
    $brand = clear($_POST['brand']);
    $quantity = clear($_POST['quantity']);

    $image = 'default.jpg';
    if (!empty($_FILES['image']['name'])) {
        // $targetDir = "images/"; 
        $image = $_FILES["image"]["name"];
        // $targetFile = $targetDir . $image;
        move_uploaded_file($_FILES["image"]["tmp_name"], 'images/$image.png');
    }

    $insert = $connection->prepare("INSERT INTO products (name, brand, quantity, image) VALUES (?, ?, ?, ?)");
    $insert->execute([$name, $brand, $quantity, $image]);

    echo "<script>
        alert('Product added successfully!');
        window.location.href='list.php?added=1';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product | Rackit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="./images/icon.png">
  <style>
    body { background: #f8f9fa; }
    .container { max-width: 600px; 
      margin-top: 60px; }
    h2 { 
        color: #041729 /*#48A9A6*/;
        text-align: center;
       color: #2c3e50;
       font-weight: bold;
      margin-bottom: 30px;
    }
    .btn-primary {
         background-color: #48A9A6 !important;
           border: none;
          color: #041729 !important; 
          font-weight: 600;
          transition: 0.3s;
      }

      .btn-primary:hover {
         background-color: #3a8d8b !important; 
         color: white !important;
         transform: translateY(-2px);
      }

     footer {
            background: linear-gradient(135deg, #1f2937, #111827);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-top: 60px;
            margin-bottom: 0px;
        }
    footer p {
            margin: 0;
            color: #ccc;
        }
  </style>
</head>
<body>
  <div class="container bg-white shadow p-4 rounded">
    <h2 class="text-center mb-4">Add New Product</h2>

    <form method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to add this product?')">
      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Brand</label>
        <input type="text" name="brand" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" min="1" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Image </label>
        <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
      </div>

      <div class="text-center mb-3">
        <img id="preview" src="#" alt="" style="display:none; max-width:150px; border-radius:8px;">
      </div>

      <button type="submit" class="btn btn-primary w-100">Add Product</button>
      <a href="list.php" class="btn btn-secondary w-100 mt-2">Back to Products</a>
    </form>
  </div>
<!-- Footer -->
<footer>
    <p>&copy; 2025 Rackit. All Rights Reserved.</p>
</footer>

</body>
</html>
