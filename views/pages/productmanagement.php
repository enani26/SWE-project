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
    <form action="insertProduct.php" method="post" style="display: inline;">
        <button type="submit" name="add_product">Add Product</button>
    </form>
    <div class="product-container">
            <div class="product">
    
                <!-- Edit Product Button -->
                <form action="editpage.php" method="post" style="display: inline;">
                    <input type="hidden" name="product_id" value="<?= isset($val['product_id']) ? $val['product_id'] : ''; ?>">
                    <button type="submit" name="edit_product">Edit Product</button>
                </form>
    
                <!-- Delete Product Button -->
                <button onclick="confirmDelete(<?= isset($val['product_id']) ? $val['product_id'] : ''; ?>">Delete Product</button>
            </div>
        
    </div>

    <script>
        function confirmDelete(productId) {
            var confirmation = confirm("Are you sure you want to delete this product?");
            if (confirmation) {
                fetch('productController.php', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ delete_product: true, product_id_to_delete: productId }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert('Product deleted successfully');
                    } else {
                        alert('Failed to delete product');
                    }
                    location.reload();
                });
            }
        }
    </script>
</body>
</html>
