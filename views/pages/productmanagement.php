<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="../../public/css/productmanagement.css">
</head>
<body>
    <h1>Product Management</h1>

    <!-- Add Product Form -->
    <form action="AdminController.php" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>
        <button type="submit" name="add_product">Add Product</button>
    </form>

    <!-- Edit Product Form -->
    <form action="AdminController.php" method="post">
        <label for="edit_product_name">Edit Product Name:</label>
        <input type="text" id="edit_product_name" name="edit_product_name" required>
        <button type="submit" name="edit_product">Edit Product</button>
    </form>

    <!-- Delete Product Button -->
    <button onclick="confirmDelete()">Delete Product</button>

    <script>
        function confirmDelete() {
            var confirmation = confirm("Are you sure you want to delete this product?");
            if (confirmation) {
                //get the product id
                var product_id="your product id here"
               
                //send a delete request using fetch
                fetch('AdminController.php', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ delete_product: true, product_id_to_delete: product_id }),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response data if needed
                    console.log(data);
                    // Optionally, reload the page or update the UI
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
        }
    </script>
</body>
</html>
