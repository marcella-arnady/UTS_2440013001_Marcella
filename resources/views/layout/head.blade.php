<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
<div class="card text-white bg-warning mb-0">
  <img class="card-img-top">
  <div class="card-body">
  <h1 class="text-center">Giant Book Supplier</p>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/children">Children</a></li>
            <li><a class="dropdown-item" href="/middlegrade">Middle Grade</a></li>
            <li><a class="dropdown-item" href="/fiction">Fiction</a></li>
        </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/publisher">Publisher</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

<div class="container-mt4">
    @yield('content')
</div>




<footer class="bg-light text-center text-white">
  <div class="text-center p-3 bg-warning">
    © Happy Book Store 2022:
  </div>
</footer>
  
</div>


</body>
</html>

