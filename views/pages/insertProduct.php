<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_id=$_POST['product_id'];
    $product_name=$_POST['product_name'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_img=$_FILES['product_image'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    //checking empty condition
if($product_id==''or $product_name=='' or $product_description=='' or $product_keyword=='' or $product_img=='' or 
$product_price=='' or $product_status==''){
    echo "<Script>alert ('please fill all the available fields')</script";
    exit();
} else{
     move_uploaded_file($temp_image,"./img/$product_img");

    //insert query
    $insert_store_product="insert into 'store_product' (product_id,product_name,product_description,product_keyword,
    product_img,product_price,status) values ('$product_title','$product_name','$product_description','$product_keyword',
    '$product_img','$product_price',NOW(),'$product_status')";
    $result_query=mysqli_query($con,$insert_store_product);
    if($result_query){
        echo "<Script>alert ('successfully inserted the products')</script";
    }
}
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
    <title> Insert Products-Admin Dashboard </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-18mE4KWBq78iYhFLdvKuhfTAU6auU8t94WrHftjDbrCEXSU1oBoqy12QvZ6jIw3"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
     integrity="sha512-9usAa10IRO0HhonpyAIVpjrylpjrylpvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="../insertProduct.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products </h1>
        <form action="" method="post" enctype="multipart/forn-data">
             
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_id" class="form-label"> Product Id </label>
            <input type="text" name="product_id" id="id" class="form-control" 
             placeholder="Enter product id" autocomplete="off" required="required">
</div>

<!-- product name -->
 <div class="form-outline mb-4 w-50 m-auto">
    <label for="product_name" class="form-label">Product Name </label>
    <input type="text" name="product_name" id="name" class="form-control"
    placeholder="Enter product name" autocomplete="off" required="required">
</div>

<!-- product description-->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_description" class="form-label"> Product Description </label>
    <input type="text" name="product_description" id="description" class="form-control"
    placeholder="Enter Product Description" autocomplete="off" required="required">
</div>

<!-- product keyword -->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_keyword" class="form-label"> Product Description </label>
<input type="text" name="product_keyword" id="keyword" class="form-control"
    placeholder="Enter Product Keyword" autocomplete="off" required="required">
</div>

<!--image -->
<div class="form-outline mb-4 w-50 m-auto">
<label for="product_image" class="form-label"> Product Image </label>
<input type="file" name="product_image" id="img" class="form-control"
plceholder="Enter Product Image" autocomplete="off" required="required">
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
<input type="text" name="product_status" id="status" class="form-control"
    placeholder="product Status" autocomplete="off" required="required">
</div>
