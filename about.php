<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>About Homemade Treasures</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Your custom styles -->
    <style>
        body {
            padding-top: 56px; /* Adjusted for the fixed navbar */
        }

        .jumbotron {
            background-image: url('img/Product/about.jpg'); /* Add your background image */
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 0;
            object-fit: contain:
        }

        .section {
            padding: 60px 0;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Homemade Treasures</h1>
        <p class="lead">Where creativity meets craftsmanship.</p>
    </div>

    <!-- About Section -->
    <div class="container section">
        <div class="row">
            <div class="col-lg-6">
                <h2>About Us</h2>
                <p>
                    Welcome to Homemade Treasures, where creativity meets craftsmanship. Our exquisite handmade items are a testament to our passion for artistry and meticulous attention to detail. We offer a diverse range of products, each lovingly crafted to perfection, reflecting the beauty of handmade artistry.
                </p>
                <p>
                    But that’s not all! We also feature a curated selection of products from other brands, expanding our treasure trove to include the best of the craft world.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image or any additional content here -->
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rOprWQl3gVI8z6nt9z6c86n9U3qzPyqBSfJ8OrpbC7cRqz7hJg8XwoJdkG1rH3kJ" crossorigin="anonymous"></script>

</body>

</html>
