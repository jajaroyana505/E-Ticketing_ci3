<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tiket</title>
</head>

<body>
   <center>
      <div style="border: solid 1px black ; padding:25px ; display:inline-block">
         <h1>Tiket Semminar</h1>
         <img width="150" src="<?= base_url('assets/img/qrcode/'); ?><?= $token; ?>.png" alt="">
         <table>
            <tr>
               <td>Nama</td>
               <td> : <?= $nama; ?></td>
            </tr>
            <tr>
               <td>NIM</td>
               <td> : <?= $nim; ?></td>
            </tr>
         </table>
      </div>
   </center>
</body>

</html>