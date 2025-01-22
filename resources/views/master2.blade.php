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
              <a href="index2.html" class="nav-link active text-white"><i class="bi bi-terminal me-3"></i>Master Projects</a>
          </li>
          <li class="nav-item">
              <a href="index3.html" class="nav-link text-white"><i class="bi bi-wrench me-3"></i>Master Service</a>
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
  
  <div class="col-md-10 bg-secondary">
    <div class="container-fluid"></div>
    <div class="row">
        <h2 class="p-3 m-3">Form login</h2>                      
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card-shadow"></div>
            <div class="card">
                <div class="card-header">
                    <h6">Data Project</h6>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tittle</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <body>
                            <tr>
                                <td>1</td>
                                <td>Profile of SMKN 1 Surabaya</td>
                                <td>3 Maret</td>
                                <td>Terdapat 9 jurusan yaitu RPL, TKJ, PSPT, DKV, MP, PH, AKL, BD, ML
                                    perkelas masing-masing tergantung dengan jenis jurusannya </td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                    <a class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Profile of SMPN 8 Surabaya</td>
                                <td>18 oktober</td>
                                <td>Terdapat 6 kelas yaitu A, B, C, D, E, F.
                                    dan terdapat 3 lantai gedung.
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="bi bi-eye"></i></button>
                                    <a class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </body>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-shadow"></div>
            <div class="card">
                <div class="card-header">
                    <h4>Login</h4>
                </div>
                    <div class="card-body">
                        <form action="">
                            <label class="form-label" for="">service type</label>
                            <select class="form-control" name="" id="">
                                <option value="">web design</option>
                                <option value="">web development</option>
                                <option value="">seo</option>
                            </select>
                            <label class="form-label" for="">project name</label>
                            <input class="form-control" type="text" required>
                            <label class="form-label" for="">project date</label>
                            <input class="form-control" type="date" required>
                            <label class="form-label" for="">project picture</label>
                            <input class="form-control" type="file" required>
                            <label class="form-label" for="">description</label>
                            <textarea class="form-control" name="" id=""></textarea>
                            <label class="form-label" for="">project status</label>
                            <div class="form check">
                                <input name="status" class="form-check-input" type="radio">
                                <label class="from-check-label" for="">ongoing</label>
                            </div>
                            <div class="form check">
                                <input name="status" class="form-check-input" type="radio">
                                <label class="form-check-label" for="">finished</label>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary text-white mt-1">Submit</button>
                                <button type="submit" class="btn btn-primary text-white mt-1">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>