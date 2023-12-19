<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <link rel="stylesheet" href="admindashboard.css"/>
  <link rel="stylesheet" href="productmanagement.php"/>
</head>

<body>
  <div class="main">
    <div class="navbar-side">
      <h6>
        <span class="icon"><i class="fas fa-code"></i></span>
        <span class="link-text">Admin Panel</span>
      </h6>
      <ul>
        <li><a href="#" class="link-active" title="Dashboard">
            <span class="icon"><i class="fas fa-chart-bar"></i></span>
            <span class="link-text">Dashboard</span>
          </a></li>
          <li><a href="productmanagement.php" class="link-active" title="Product Management">
            <span class="icon"><i class="fas fa-list"></i></span>
            <span class="link-text">product Management</span>
          </a></li> 
        <li><a href="#" title="Category">
            <span class="icon"><i class="fas fa-list-alt"></i></span>
            <span class="link-text">Category</span>
          </a></li>
        <li><a href="#" title="Comment">
            <span class="icon"><i class="fas fa-comment"></i></span>
            <span class="link-text">Comment</span>
          </a></li>
        <li><a href="#" title="Tags">
            <span class="icon"><i class="fas fa-tags"></i></span>
            <span class="link-text">Tags</span>
          </a></li>
        <li><a href="#" title="Profile">
            <span class="icon"><i class="fas fa-user-circle"></i></span>
            <span class="link-text">Profile</span>
          </a></li>
        <li><a href="#" title="Setting">
            <span class="icon"><i class="fas fa-cog"></i></span>
            <span class="link-text">Setting</span>
          </a></li>
        <li><a href="#" title="Sign Out">
            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
            <span class="link-text">Sign Out</span>
          </a></li>
      </ul>
    </div>
    <div class="content">
      <nav class="navbar navbar-dark bg-dark py-1">

        <a href="#" id="navBtn">
          <span id="changeIcon" class="fa fa-bars text-light"></span>
        </a>

        <div class="d-flex">
          <a class="nav-link text-light px-2" href="#"><i class="fas fa-search"></i></a>
          <a class="nav-link text-light px-2" href="#"><i class="fas fa-bell"></i></a>
          <a class="nav-link text-light px-2" href="#"><i class="fas fa-sign-out-alt"></i></a>
        </div>

      </nav>
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-primary rounded-0">
              <div class="card-header bg-primary rounded-0">
                <h5 class="card-title text-white mb-1">Total Users</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-primary text-center">105</h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-success rounded-0">
              <div class="card-header bg-success rounded-0">
                <h5 class="card-title text-white mb-1">Verified Users</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-success text-center">75</h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-2">
            <div class="card border-danger rounded-0">
              <div class="card-header bg-danger rounded-0">
                <h5 class="card-title text-white mb-1">Unverified Users</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-danger text-center">30</h1>
              </div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-primary rounded-0">
              <div class="card-header bg-primary rounded-0">
                <h5 class="card-title text-white mb-1">Total Posts</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-primary text-center">98</h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-success rounded-0">
              <div class="card-header bg-success rounded-0">
                <h5 class="card-title text-white mb-1">Published Posts</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-success text-center">33</h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-2">
            <div class="card border-danger rounded-0">
              <div class="card-header bg-danger rounded-0">
                <h5 class="card-title text-white mb-1">Private Posts</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-danger text-center">16</h1>
              </div>
            </div>
          </div>

        </div>
</body>

</html>