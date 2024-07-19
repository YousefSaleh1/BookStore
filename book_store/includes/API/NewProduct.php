<?php    
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header("location: ../../add-new-product.php");
        return;
    }
    if(!isset($_POST['name']) || !isset($_POST['price'])){
        header("location: ../../add-new-product.php");
        return;
    }
    include "../DBConnection.php";
    $query = "SELECT id FROM `product` WHERE name = :name AND price = :price";
    $data = [
        ':name'    => $_POST['name'],
        ':price'   => $_POST['price']
    ];
    $product = SQLWithData($query, $data);

    if(count($product) > 0){
        header("location: add-new-product.php?error=1");
    }
    else{
        if (isset($_POST['upload'])) {
            // Get image name
            $image = $_FILES['image']['name'];
            // image file directory
            $target = "imgs/".basename($image);     
            // // execute query
            $query = "INSERT INTO `product`(`name`, `price`, `details`,`image`,`category_name`) VALUES (:name, :price, :details,:image,:category)";
            $data = [
                ':name'     => $_POST['name'],
                ':price'    => $_POST['price'], 
                ':details'  => $_POST['details'],
                ':image'     => $_FILES['image']['name'],
                ':category'  => $_POST['category'],
            ]; 
            $product = SQLWithData($query, $data);
            header("location: ../../add-new-product.php?success=1");
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
    }
?>