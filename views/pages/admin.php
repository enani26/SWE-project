<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>

        <section class="highlight-section">
            <h2>Best Sellers</h2>
            <?php include 'best_sellers.php'; ?>
        </section>

        <section class="view-products-section">
            <h2>View Products</h2>
            <?php include 'view_products.php'; ?>
        </section>

        <section class="sold-out-section">
            <h2>Sold-Out Items</h2>
            <?php include 'sold_out_items.php'; ?>
        </section>
    </div>
</body>
</html>

