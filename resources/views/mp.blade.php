<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
   
<div class="row g-0">
    <div class="col-md-2 d-flex flex-column  p-3 text-white bg-success " style="width: 222px; height: inherit;  ">
    <a class="d-flex alignment-items-center text-white text-decoration-none " href=""><span class="fw-bold fs-5 mb-3"> Belajar Bootstrap</span></a>

 <ul class="nav nav-pills flex-column mb-auto ">
    
    <li class="nav-item">   
        <a href="homee" class="nav-link text-white"><i class="bi bi-house-door me-2"></i>Home</a>
    </li>
    <li class="nav-item">
        <a href="mp" class="nav-link active text-white"><i class="bi bi-hdd me-2"></i>master project</a>
    </li>
    <li class="nav-item">
        <a href="ms" class="nav-link text-white"><i class="bi bi-hammer me-2"></i></i>master service</a>
    </li>
 </ul>
 <hr>

<div class="dropdown">
<div class="dropdown">
    <a class=" dropdown-toggle text-white bg-success text-decoration-none "  data-bs-toggle="dropdown" aria-expanded="false">
      <strong>admin</strong>
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>
</div>
    </div>

<div class="col-md-10 bg-white overflow-auto">
    <div class="container-fluid">
        <div class="row">
            <h2 class="mt-2">master project</h2>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>data project</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <th>#</th>
                                <th>title</th>
                                <th>date</th>
                                
                                <th>description</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Company Profile SMKN 1 SURABAYA</td>
                                    <td>20 februari 2023</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet unde molestias ipsa ipsam perferendis veritatis itaque placeat necessitatibus, nostrum repellat temporibus similique aliquid maiores! Aut consectetur fugit sint dignissimos est.</td>
                                    <td>
                                        <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                        
                                    </td>
                                    <td> <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a></td>
                                    <td><button class="btn btn-info " data-bs-toggle="modal" data-bs-target="#detailproject" ><i class="bi bi-eye-fill"></i></button></td>
                                </tr>
                                <tr></tr>
                                    <td>2</td>
                                    <td>Company Profile SMKN 1 SURABAYA</td>
                                    <td>20 februari 2023</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet unde molestias ipsa ipsam perferendis veritatis itaque placeat necessitatibus, nostrum repellat temporibus similique aliquid maiores! Aut consectetur fugit sint dignissimos est.</td>
                                    <td>
                                        <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                        
                                    </td>
                                    <td> <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a></td>
                                    <td><button class="btn btn-info " data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye-fill"></i></button></td>
                                </tr>
                            </body>
                            
                        </table>
                        <div class="modal" tabindex="-1" id="detailproject">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>Tambah Project</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <label class="form-label" for="">Service type</label>
                            <select class="form-control" name="" id="">
                                <option value="">web desain</option>
                                <option value="">web development</option>
                                <option value="">SEO</option>
                            </select>
                            <label class="form-label" for="">Project Name</label>
                            <input class="form-control" type="text" required>
                            <label class="form-label" for="">project Date</label>
                            <input class="form-control" type="date">
                            <label class="form-label" for="">Project Picture</label>
                            <input class="form-control" type="file">
                            <label class="form-label" for="">Description</label>
                            <textarea class="form-control" name="" id=""></textarea>
                            <label class="form-label" for="">project status</label>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="radio" >
                                <label class="form-check-label" for="" >ongoing</label>
                                
                            </div>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="radio" >
                                <label class="form-check-label"  type="radio" >finished</label>
                            </div>

                            <input class="btn btn-success mt-2" type="submit" value="simpan">
                            <input class="btn btn-danger mt-2" type="button" value="cancel">
                        </form>
                    </div>
                
                <div class="card-footer">

                </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</html>
</body>
</html>