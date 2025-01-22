<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
<div class="row g-0">
  <div class="col-md-2 d-flex flex-column p-3 text-white bg-dark" style="height: 100vh;">
  <a class="d-flex align-items-center text-white text-decoration-none mb-3" href=""><span class="fw-bold fs-4">Menu</span></a>
      <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
              <a href="index.html" class="nav-link  text-white"><i class="bi bi-bank me-3"></i>Home</a>
          </li>
          <li class="nav-item">
              <a href="index2.html" class="nav-link text-white"><i class="bi bi-terminal me-3"></i>Master Projects</a>
          </li>
          <li class="nav-item">
              <a href="index3.html" class="nav-link active text-white"><i class="bi bi-wrench me-3"></i>Master Service</a>
          </li>
      </ul>
      <hr>
      <div class="dropdown">
          <div class="dropdown">
              <a class="d-flex align-items-center dropdown-toggle text-decoration-none text-white"  data-bs-toggle="dropdown" aria-expanded="false">
              <strong>Admin</strong>
              
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
            </div>
      </div>
  </div>
  <div class="col-md-10 bg-white">
    <div class="container-fluid"></div>
    <div class="row">
        <h1 class="p-3 m-3">Moment bestiey:)</h1>                      
    </div>
    <div class="d-flex">
        <div class="card">
            <div class="card-header">
                <table class="table table-responsive">
                    <img src="webcam-toy-photo7.jpg" height="400px">
                    <tr>
                        <td>moments 1</td>
                    </tr>
                </table>
            </div>
            <div class="card-header">
                <table class="table table-responsive">
                    <img src="webcam-toy-photo6.jpg" height="400px">
                    <tr>
                        <td>moments 2</td>
                    </tr>
                </table>
            </div>
            <div class="card-header">
                <table class="table table-responsive">
                    <img src="webcam-toy-photo1.jpg" height="400px">
                    <tr>
                        <td>moments 3</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>