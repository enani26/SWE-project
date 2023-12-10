<?php

require_once("../../models/products.php");
require_once("../../controllers/productController.php");

$model = new products();
$controller = new productController($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

?>

<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
    <title> Insert Products-Admin Dashboard </title>
</head>
<style>
    body {
        background-color: #f5f5f5;
        font-family: 'Arial', sans-serif;
    }

    h1 {
        color: #333;
        text-align: center;
    }

    form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    input[type="text"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        outline: none;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products </h1>
        <form action="insertProduct.php?action=insert" method="post" enctype="multipart/form-data">



            <!-- product name -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_name" class="form-label">Product Name </label>
                <input type="text" name="product_name" id="name" class="form-control" placeholder="Enter product name"
                    autocomplete="off" required="required">
            </div>

            <!-- product description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label"> Product Description </label>
                <input type="text" name="product_description" id="description" class="form-control"
                    placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>

            <!-- product keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label"> Product Keyword </label>
                <input type="text" name="product_keyword" id="keyword" class="form-control"
                    placeholder="Enter Product Keyword" autocomplete="off" required="required">
            </div>

            <!--image -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label"> Product Image </label>
                <input type="File" name="product_img" id="img" class="form-control" plceholder="Enter Product Image"
                    autocomplete="off" required="required">
            </div>

            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label"> Product Price </label>
                <input type="text" name="product_price" id="price" class="form-control"
                    placeholder="Enter Product price" autocomplete="off" required="required">
            </div>

            <!--status-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_status" class="form-label"> Product Status </label>
                <input type="text" name="status" id="status" class="form-control" placeholder="product Status"
                    autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="form-control" value="insert_product">
            </div>



        </form>
    </div>
</body>

</html>