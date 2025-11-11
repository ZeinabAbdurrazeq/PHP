<?php
require_once 'connection.php';

if (!isset($_GET['id'])) {
    header("Location: list.php");
    exit;
}

$id = $_GET['id'];

$stmt = $connection->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']) ?> | Rackit</title>

     <link rel="icon" type="image/png" href="./images/icon.png">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f9fb;
            font-family: 'Poppins', sans-serif;
        }
        .product-container {
            max-width: 1000px;
            margin: 60px auto;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .product-img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }
        .product-details {
            padding: 30px;
        }
        .product-details h2 {
            color: #2c3e50;
            font-weight: bold;
        }
        .product-details .brand {
            color: #48A9A6;
            font-weight: 600;
            font-size: 18px;
        }
        .product-details p {
            color: #555;
            line-height: 1.6;
        }
        .product-info {
            margin-top: 20px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .btn-custom {
            background-color: #48A9A6;
            color: #fff;
            border: none;
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
            margin-top: 60px;
            margin-bottom: 0px;
        }
        footer p {
            margin: 0;
            color: #ccc;
        }
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
footer {
    margin-top: auto;
}

    </style>
</head>
<body>

<div class="product-container">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="images/<?= htmlspecialchars($product['image']) ?>" class="product-img" alt="<?= htmlspecialchars($product['name']) ?>">
        </div>
        <div class="col-md-6">
            <div class="product-details">
                <h2><?= htmlspecialchars($product['name']) ?></h2>
                <p class="brand"><?= htmlspecialchars($product['brand']) ?></p>
                
                <div class="product-info">
                    <div class="info-item"><strong>Quantity:</strong> <?= htmlspecialchars($product['quantity']) ?></div>
                    <div class="info-item"><strong>ID:</strong> <?= htmlspecialchars($product['id']) ?></div>
                </div>

                <p class="mt-4">
                    This product is part of Rackit's high-performance network infrastructure collection.
                    Engineered for reliability and scalability in modern data environments.
                </p>

                <a href="list.php" class="btn btn-custom mt-3"><i class="fa-solid fa-arrow-left me-2"></i>Back to Products</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Rackit. All Rights Reserved.</p>
</footer>

</body>
</html>
