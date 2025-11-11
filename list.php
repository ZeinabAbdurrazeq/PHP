<?php
//PDO PART
const DSN= "mysql:dbname=rackitdb; host=localhost";
const USER = "root";
const PASS= "";

try {

    $connection = new PDO(DSN, USER,PASS);
    $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $select = 'SELECT * FROM products';
    $query = $connection->prepare($select);
    $query->execute();
    $products =$query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
    die("Connection Failed:" . $ex->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <link rel="icon" type="image/png" href="./images/icon.png">

  <style>
    :root {
      --color-accent: #FFD166;
      --color-dark-navy: #030b13ff;
      /* --color-dark-navy: #F5F7FA; */
      --color-light-gray: #E1E8ED;
      --color-very-light: #F5F7FA;
      --gold: #F2B602;
      --dark-bg: #041729;
      --light-bg: #ffffff;
      --text-dark: #1a1a1a;
    }

    body {

       
      background: var(--color-very-light);
      background-color: #000000ff;
      font-family: 'Inter', sans-serif;
      color: var(--color-dark-navy);

      
    }
    /* body {
  background-color: var(--dark-bg);
  font-family: 'Inter', sans-serif;
  color: var(--light-bg);
} */

    

    h2 {
      text-align: center;
      font-weight: 700;
      color: #ecececff;
      margin-top: 40px;
    }

    .add-btn {
      display: block;
      width: fit-content;
      margin: 0px auto;
      background: var(--color-accent);
      color: var(--color-dark-navy);
      border: none;
      padding: 10px 20px;
      border-radius: 30px;
      font-weight: 600;
      transition: 0.3s;
    }

    .add-btn:hover {
      background: #e3bb4e;
      transform: translateY(-2px);
    }

    /* .product-card {
      background: var(--color-dark-navy);
      color: var(--color-light-gray);
      border: 1px solid rgba(255, 209, 102, 0.2);
      border-radius: 15px;
      transition: all 0.3s ease;
      overflow: hidden;
    } */

    .product-card:hover {
      transform: translateY(-8px);
      border-color: var(--color-accent);
      box-shadow: 20px 20px 40px rgba(255, 209, 102, 0.1);
    }

    .product-card img {
      height: 220px;
      width: 100%;
      object-fit: cover;
      border-bottom: 1px solid rgba(255, 209, 102, 0.3);
    }
/*================================================================                         */
.product-card {
  background: var(--light-bg); 
  color: var(--text-dark);
  border: 1px solid rgba(242, 182, 2, 0.3);
  border-radius: 15px;
  overflow: hidden;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
/* .product-card:hover img {
  filter: brightness(1.1);
  transform: scale(1.03);
  transform: translateY(-8px);
  border-color: var(--color-accent);
  box-shadow: 20px 20px 40px rgba(255, 209, 102, 0.1);
} */
.product-card:hover {
  filter: brightness(1);
  transform: translateY(-8px);
  border-color: var(--gold); 
  box-shadow: 20px 20px 20px 3px  rgba(249, 188, 5, 0.18);
}
.add-btn {
  background: var(--gold);
  color: #010e1bff;
  border-radius: 30px;
  box-shadow: 0 4px 10px rgba(6, 3, 24, 0.3);
  text-decoration: none;

}
body {
  background-color: #010e1bff; /* #010e1bff */
  font-family: 'Inter', sans-serif;
  color: #ebeef1ff;
}




    .card-body {
      padding: 1.2rem;
    }

    .card-title {
      color: #fbbe06ff;
      font-weight: 600;
    }

    .card-text {
      font-size: 0.95rem;
      /* color: var(--color-light-gray); */
      color:#041729;
      margin-bottom: 0.4rem;
    }

    .icon-btn {
      border: none;
      background: none;
      color: var(--color-accent);
      font-size: 1.2rem;
      cursor: pointer;
      transition: 0.2s;
    }

    .icon-btn:hover {
      color: white;
      transform: scale(1.1);
    }

    .icon-edit { color: #1c3e61ff; }
    .icon-delete { color: #b80000ff; }
    .icon-view { color: #267216ff; }

    .icon-edit:hover { color: #7bc4ff; }
    .icon-delete:hover { color: #ff8f8f; }
    .icon-view:hover { color: #78b96eff; }
  .container{
    width:70%;
  }
       footer {
            background: #282f3eff;
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
 /* Navbar */
    header {
      background:#F5F7FA;
      color: black;
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    header .container {
      width: 90%;
      margin: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 {
      font-size: 1.8rem;
      letter-spacing: 1px;
    }
    nav a {
      color: black;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }
    nav a:hover {color: #ffcc00;}
/* logo*/
.logo-link h1 {
  margin: 0;
  color: #2c3e50;
    }


.logo-link {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  text-decoration: none;
  color: inherit;
}

.logo-link h3 {
  margin: 0;
  color: #2c3e50;
  font-weight: bold;
}

.logo-img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid #030b35ff;
  padding: 3px; 
  background-color: #fff; 
  box-shadow: 0 0 10px rgba(72, 169, 166, 0.3); 
  transition: transform 0.3s, box-shadow 0.3s;
}

.logo-img:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px #F2B602;
}
/*==================*/
/* .add-card {
  background-color: #fff;
  border: 2px dashed #ccc;
  border-radius: 15px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.add-card:hover {
  border-color: #48A9A6;
  box-shadow: 0 8px 20px rgba(72, 169, 166, 0.3);
  transform: translateY(-5px);
}

.plus-circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: #f0f0f0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3rem;
  color: #48A9A6;
  font-weight: bold;
  transition: 0.3s;
}

.add-card:hover .plus-circle {
  background: #48A9A6;
  color: #fff;
} */

.add-card {
  background-color: #fff;
  border: 2px solid #F2B602;
  border-radius: 15px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  height: 400px; 
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.add-card:hover {
  border-color: #F2B602;
  box-shadow: 0 8px 20px rgba(72, 169, 166, 0.3);
  transform: translateY(-5px);
}

.plus-circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: #f0f0f0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3rem;
  color: #F2B602;
  font-weight: bold;
  transition: 0.3s;
}

.add-card:hover .plus-circle {
  background: #F2B602;
  color: #fff;
}




  </style>
</head>

<body>
<header>
  <div class="container">
    
        <a href="index.php" class="logo-link">
  <img src="./images/icon.png" alt="RackIt Logo" class="logo-img">
  
  <h3>RackIT</h3>
</a>


    <nav>

      <a href="index.php">Home</a>
      <a href="list.php">Products</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="logout.php">Logout</a>
    </nav>
  </div>
</header>

  <div class="container py-5">
    
    <!-- <h2>Our Products</h2> -->


    <div class="row g-4 mt-4">
      <?php if (!empty($products)) {
        foreach ($products as $product) { ?>
          <div class="col-md-4 col-sm-6">
            <div class="product-card">
              <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5> <br>
                <p class="card-text"><strong>Brand:</strong> <?php echo htmlspecialchars($product['brand']); ?></p>
                <p class="card-text"><strong>Quantity:</strong> <?php echo htmlspecialchars($product['quantity']); ?></p>
                <div class="d-flex justify-content-center gap-3 mt-3">
                  <a href="details.php?id=<?php echo $product['id']; ?>" class="icon-btn icon-view">
                    <i class="fa-solid fa-eye"></i>
                  </a>
                  <a href="edit.php?id=<?php echo $product['id']; ?>" class="icon-btn icon-edit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <button type="submit" class="icon-btn icon-delete">
                      <i class="fa-solid fa-trash"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
      <?php }
 
 ?>
<div class="col-md-4 d-flex align-items-stretch mb-4">
  <a href="addProduct.php" class="card add-card w-100 text-center text-decoration-none">
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <div class="plus-circle">+</div>
      <h5 class="mt-3 text-muted">Add Product</h5>
    </div>
  </a>
</div>
<?php } else { ?>
        <div class="text-center">
          <p class="text-muted fs-5">No products found.</p>
        </div>
      <?php } ?>
    </div>
    <br><br>


  </div>


<!-- Footer -->
<footer>
    <p>&copy; 2025 Rackit. All Rights Reserved.</p>
</footer>
</body>
</html>