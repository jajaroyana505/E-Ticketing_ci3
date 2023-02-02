<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bootstrap demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
   <div class="row justify-content-center">
      <div class="col-4 p-5">
         <div class="card p-4">
            <h1>Baca Kode QR</h1>
            <form method="post" action="<?= base_url('generate_qr/generate'); ?>">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Isi konten dari QRcode</label>
                  <input disabled placeholder="000000" type="text" name="konten" class="form-control">
               </div>
            </form>

            <div class="card-body text-center">

               <img width="200" src="<?= base_url(); ?>assets/img/qrcode/sadasds.png" alt="">

            </div>


         </div>
         <a class="nav text-center mt-3" href="<?= base_url(); ?>generate_qr/index">kembali </a>

      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>