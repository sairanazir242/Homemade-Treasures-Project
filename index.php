
<?php
  include('includes/connect.php');
  include('functions/common_function.php');
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Homemade Treasures</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Aweosome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>
<body>
<!-- first section -->
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="img/Logowhite.png" alt="Homemade Treasures Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Products</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <?php
if (isset($_SESSION['username'])) {
    echo "<li class='nav-item'>
        <a class='nav-link active' href='./users_area/profile.php'>My Account</a>
    </li>";
} else {
    echo "<li class='nav-item'>
        <a class='nav-link active' href='./users_area/user_registration.php'>Register</a>
    </li>";
}
?>

        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();  ?></sup></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"> <?php total_cart_price();?></a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-success" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!-- calling cart function -->
<?php
cart()
?>
</div>
<!-- second section -->
<div class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
       
        <?php
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
          </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href=''>Welcome " . $_SESSION['username'] . "</a>
          </li>";
        }
if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link' href='./users_area/user_login.php'>Login</a>
  </li>";
}else{
  echo "<li class='nav-item'>
  <a class='nav-link' href='./users_area/logout.php'>Logout</a>
  </li>";
}

?>
        
    </ul>
</div>
<!-- third -->
<div class="bg-light">
  <h3 class="text-center">Homemade Treasures</h3>
  <p class="text-center">Welcome to Homemade Treasures, where creativity meets craftsmanship. Our exquisite handmade items are a testament to our passion for artistry and meticulous attention to detail. We offer a diverse range of products, each lovingly crafted to perfection, reflecting the beauty of handmade artistry. But that’s not all! We also feature a curated selection of products from other brands, expanding our treasure trove to include the best of the craft world.</p>
</div>
<!-- fourth -->
<div class="row">
  <div class="col-md-10 mr-2">
    <!-- products -->
    <div class="row">
    <?php
    getproducts();
    get_unique_categories();
    get_particular_brands();
//     $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
?>
    </div>
  </div>
  
  <div class="col-md-2 bg-secondary p-0 ">
    <!-- sidnavbar -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-success">
        <a href="" class="nav-link text-light"><h4>Brands</h4></a>
      </li>
      <?php
      getbrands();
      ?>
    </ul>
    <!-- categories -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-success">
        <a href="" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php
      getcategories();
      ?>
    </ul>
  </div>
</div>

<!-- Bootstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>







