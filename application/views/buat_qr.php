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
            <h1>Generate Kode QR</h1>
            <form method="post" action="<?= base_url('generate_qr/generate'); ?>">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Maukan konten</label>
                  <input type="text" name="konten" class="form-control">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="card-body text-center">
               <?php if ($img == false) { ?>
                  <img width="200" src="<?= base_url(); ?>assets/img/qrcode/sadasds.png" alt="">
               <?php } else { ?>
                  <img width="200" src="<?= base_url(); ?>assets/img/qrcode/<?= $img ?>.png" alt="">
               <?php } ?>
            </div>


         </div>
         <a class="nav text-center mt-3" href="<?= base_url('generate_qr/baca_qr'); ?>">Scan QRcode</a>

      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>