<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JAS - Nelayan | Pelayanan Kejaksaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">

    <!-- Header -->
    <div class="text-center p-3">
        <div class="row justify-content-center">
            <div class="col-sm-2 me-2 mb-3 shadow rounded-3 bg-white">
                <h3 class="text-primary"><i class="bi bi-input-cursor"></i></h3>
                <p class="text-muted">Data Masuk Hari ini</p>
                <h6>0</h6>
            </div>

            <div class="col-sm-2 me-2 mb-3 shadow rounded-3 bg-white">
                <h3 class="text-primary"><i class="bi bi-input-cursor"></i></h3>
                <p class="text-muted">Data Masuk Bulan ini</p>
                <h6>0</h6>
            </div>

            <div class="col-sm-2 me-2 mb-3 shadow rounded-3 bg-white">
                <h3 class="text-primary"><i class="bi bi-clipboard-data"></i></h3>
                <p class="text-muted">Rekap Data</p>
                <a href="" class="btn btn-primary btn-sm mb-3 ps-3 pe-3"><i class="bi bi-eye"></i> Lihat</a>
            </div>

            <div class="col-sm-2 me-2 mb-3 shadow rounded-3 bg-white">
                <h3 class="text-primary"><i class="bi bi-person-check-fill"></i></h3>
                <p class="text-muted">Admin</p>
                <a href="" class="btn btn-warning text-white btn-sm mb-3 ps-3 pe-3"><i class="bi bi-pencil-square"></i>  Ubah</a>
                <a href="" class="btn btn-danger btn-sm mb-3 ps-3 pe-3"><i class="bi bi-box-arrow-right"></i></a>
            </div>
            
        </div>
    </div>

    <!-- End Header -->


       <!-- Isi Konten -->
       <div class=" jas text-center p-3 mb-5  shadow  rounded-3 bg-white">
            <p><img src="../img/logo.png" alt="" width="75" class="mb-3 mt-3"></p>
            <h1 class="text-primary fw-bold lh-lg">JAS - nelayan</h1>
            <p class="lead">-Kejaksaan Negeri Rote Ndao-</p>

            <div class="row justify-content-center mt-5">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h3 class="text-start text-primary">Menu I</h3>
                            <hr class="text-primary">
                           <div class="card">
                               
                               <div class="card-body mb-5 mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi consequuntur minus dignissimos blanditiis, velit ipsam?</div>
                               <div class="card-footer bg-white"><a href="" class="btn btn-outline-primary ps-5 pe-5">Menu 1</a></div>
                           </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                        <h3 class="text-start text-primary">Menu II</h3>
                        <hr class="text-primary">    
                           <div class="card">
                               
                               <div class="card-body mb-5 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, necessitatibus nobis doloremque voluptas excepturi nam.</div>
                               <div class="card-footer bg-white"><a href="" class="btn btn-outline-primary ps-5 pe-5">Menu 2</a></div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img src="img/nelayan.png" alt="" width="280">
                </div>
            </div>
        </div>
       <!-- End Konten -->

    </div>

    <!-- footer -->
    <div class="text-center p-3 text-primary bg-white"> Copyright &copy Kejaksaan Negeri Rote Ndao 2021</div>
    <!-- end footer -->


<!-- Modal Edit Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end Modal -->

</body>
</html>