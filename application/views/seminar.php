<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Seminar</title>
</head>

<body>
   <center>
      <div style="border: solid 1px black ; padding:25px ; display:inline-block">
         <h1>Daftar Semminar</h1>
         <form action="<?= base_url('mahasiswa/daftar'); ?>" method="post">
            <table>
               <tr>
                  <td>
                     Nama Lengkap
                  </td>
                  <td>
                     <input type="text" name="nama">
                  </td>
               </tr>
               <tr>
                  <td>
                     NIM
                  </td>
                  <td>
                     <input type="text" name="nim">
                  </td>
               </tr>
               <tr>
                  <td>
                     Email
                  </td>
                  <td>
                     <input type="email" name="email">
                  </td>
               </tr>
               <tr>
                  <td>
                     Kelas
                  </td>
                  <td>
                     <input type="text" name="kelas">
                  </td>
               </tr>
               <tr>
                  <td>
                     No Telepon
                  </td>
                  <td>
                     <input type="text" name="no_telepon">
                  </td>
               </tr>
               <tr>
                  <td>Pilih seminar</td>
                  <td>
                     <select name="id_seminar" id="cars">
                        <?php foreach ($seminar as $sem) { ?>
                           <option value="<?= $sem['id']; ?>"><?= $sem['tema']; ?></option>
                        <?php } ?>
                     </select>
                  </td>
               </tr>
               <tr>
                  <td>

                  </td>
                  <td><input type="submit" value="Daftar"></td>
               </tr>
            </table>
         </form>
      </div>
   </center>
</body>

</html>