<?php
require_once("controller.php");

class productController extends Controller
{

    public function insert()
    {
        $product_name = $_REQUEST['product_name'];
        $product_description = $_REQUEST['product_description'];
        $product_keyword = $_REQUEST['product_keyword'];
        // $product_img = $_REQUEST['product_img'];
        $product_img ='';
        $product_price = $_REQUEST['product_price'];
        $status = $_REQUEST['status'];
        // check if an image file was uploaded
        $imgFile = null;
        $uploadPath = null;
        $vall = null;

        if (($_FILES['product_img'])) {
            $imgFile = $_FILES['product_img'];

            // Assuming $product_name is equivalent to product_name 
            $uploadPath = "../pages/img/" . $product_name . ".jpg";
            // Ensure the destination directory exists, create it if necessary
            $destinationDirectory = dirname($uploadPath);
            if (!is_dir($destinationDirectory)) {
                mkdir($destinationDirectory, 0755, true);
            }

            // Move the uploaded file to the specified path
            if (move_uploaded_file($imgFile['tmp_name'], $uploadPath)) {
                $vall = $product_name . ".jpg";
            } else {
                http_response_code(500);
                die("Error uploading file");
            }

        }

        $this->model->insert_product($product_name, $product_description, $product_keyword, $vall, $product_price, $status);
    }
}

?>