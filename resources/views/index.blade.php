<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Dashboard with Sidebar</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Users
            </a>
          </li>
          <!-- Add more sidebar items as needed -->
        </ul>
      </div>
    </nav>

    <!-- Main content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- Content goes here -->
    </main>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
