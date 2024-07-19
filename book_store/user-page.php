<?php
include "includes/Validation/isLoggedin.php";
include "includes/DBConnection.php";

$userInfo = SQLWithData(
    "SELECT name, email FROM users WHERE id = :user_id",
    ['user_id' => $_SESSION['user_id']]
);

$name = $userInfo[0]['name'];
$email = $userInfo[0]['email'];

include 'includes/app-entry-point.php';
// Check for the success flag
$add_to_favorites_success = isset($_SESSION['add_to_favorites_success']) && $_SESSION['add_to_favorites_success'];

// Unset the session variable to avoid displaying the message on subsequent visits
unset($_SESSION['add_to_favorites_success']);

$search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style3.css">
    <title>book store</title>
</head>
<body>
<nav class="UserNav navbar navbar-expand-lg fixed-top" id="scroll-navbar" style="transition: all 0.3s ease-in-out;">
    <div class="container-fluid">
        <h1 style="color:black; font-size: 36px;font-weight: 600;font-family: initial;margin-left:20px;margin-top: 5px;">BookStore</h1>
        <!-- ------------------------------- -->
        <button class="navbar-toggler" type="button" onclick="myFunction()" data-mdb-toggle="collapse" data-mdb-target="#mytoggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -16px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" fill="currentColor" class="bi bi-justify" viewBox="1 1 10 10">
                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="mytoggler">
            <ul class="navbar-nav home-link me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <?php
                $query = "SELECT name FROM category";
                $results = SQLQuery($query);
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <button class="dropdown-item" id="all-products">All</button>
                        <?php foreach ($results as $category) : ?>
                            <button class="dropdown-item" id="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></button>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">About-us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex">
                <a href="favorites.php" class="add-pro-btn"><i class='fa fa-heart-o' style="font-size:20px !important;"></i> My Favorites</a>
                <a href="includes/API/logout.php" class="add-pro-btn" style="padding-left: 10px;padding-right: 10px;">logout</a>
            </ul>
        </div>
    </div>
</nav>  

<main class="user_product">
    <div class="container text-center">
        <?php if ($add_to_favorites_success) : ?>
            <div class="alert alert-success" role="alert">
                Book added to favorites successfully!
            </div>
        <?php endif; ?>
        <div class="row gy-5">
            <h3 class="mine fw-bold pb-3" style="letter-spacing: 2px;color: rgb(233, 95, 3);">Our Books</h3>
            <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="GET" action="user-page.php">
                <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
                <input class="search form-control form-control-sm ml-3 w-75" type="text" placeholder="Search by the name of the book" aria-label="Search" name="search_query">
                <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>


            <?php
                if (!empty($search_query)) {
                    // If a search query is provided, modify the SQL query
                    $query = "SELECT * FROM `product` WHERE `name` LIKE :search ORDER BY `created_at` DESC";
                    $data = [':search' => "%$search_query%"];
                        $row = SQLWithData($query, $data);
                } else {
                    // If no search query, retrieve all products
                    $row = SQLQuery("SELECT * FROM `product` ORDER BY `created_at` DESC");
                }
            ?>

            <?php foreach ($row as $prod) : ?>
                <div class="ProCol col-4"  data-category="<?php echo $prod['category_name']; ?>">
                    <div class="card" style="margin-bottom: 10px;">
                        <div class="card-body">
                            <div class="pro-img-box">
                                <div class="d-flex product-sale">
                                    <i class="mdi mdi-heart text-danger ml-auto wishlist"></i>
                                </div>
                                <img class="w-100" src="includes\API\imgs\<?php echo $prod['image']; ?>" style="height: 300px;" alt="product-image">
                            </div>
                            <h5 class="card-title" style="margin-top: 5px;"><?php echo $prod['name']; ?></h5>
                            <small style="color:red;">
                                <p><?php echo $prod['price']; ?>s.p</p>
                            </small>
                            <div>
                                <form action="includes/API/addToFavorites.php" method="post">
                                    <a href="book-details.php?id=<?php echo $prod['id']; ?>" class="card-btn" style="display: inline-block;">Show details</a>
                                    <input type="hidden" name="book_id" value="<?php echo $prod['id']; ?>">
                                    <button type="submit" name="upload" class="card-btn"><i class='fa fa-plus-circle' style='color:#ffffff;'>Add to Favorites</i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<script> 
 // Function to load products based on the selected category
 function loadProducts(category) {
    // Hide all products
    document.querySelectorAll('.ProCol').forEach(function (product) {
      product.style.display = 'none';
    });

    // Show products of the selected category or show all products
    if (category === 'all-products') {
      document.querySelectorAll('.ProCol').forEach(function (product) {
        product.style.display = 'block';
      });
    } else {
      document.querySelectorAll('.ProCol[data-category="' + category + '"]').forEach(function (product) {
        product.style.display = 'block';
      });
    }
  }

  // Event handler for category selection
  document.querySelectorAll('.dropdown-item').forEach(function (item) {
    item.addEventListener('click', function () {
      var category = this.id;
      loadProducts(category);
    });
  });
</script>
<?php echo HomeFooter(); ?>
<?php echo Footer(); ?>


