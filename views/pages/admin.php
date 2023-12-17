<!-- admin_dashboard.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admindashboard.css">
</head>
<body>
    <header>
        <h1>Welcome, Admin!</h1>
        <a href="logout.php">Logout</a>
    </header>

    <div class="container">
        <h2>Admin Dashboard</h2>
        <p>Here, you can perform administrative tasks.</p>

        <div class="dashboard-card">
            <h3>Total Users</h3>
            <p><?php echo $totalUsers; ?></p>
        </div>

        <div class="dashboard-card">
            <h3>Total Sales</h3>
            <p><?php echo $totalSales; ?></p>
        </div>

        <!-- Add more dashboard cards for other metrics or tasks -->
    </div>
</body>
</html>

