<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Tes QR</title>
</head>

<body>
   <div style="display: flex; flex-direction: column; align-items: center">
      <!-- <canvas id="canvas" style="width: 100px; height: 100px; border: 2px solid black"></canvas> -->
      <input type="text" placeholder="contoh" id="qrInput" onchange="generate()" />

      <table>
         <tr>
            <?php for ($i = 0; $i < 5; $i++) { ?>
               <td>
                  <canvas id="canvas" style="width: 100px; height: 100px; border: 2px solid black"></canvas>
                  <script>
                     generate(<?= $i; ?>)
                  </script>
               </td>
            <?php } ?>
         </tr>
      </table>
   </div>

   <script src="<?= base_url('assets'); ?>/js/qrcode/build/qrcode.js"></script>
   <script>
      // memberikan interval
      // setInterval(generate, 5000);
      generate()

      // generiting qrcode
      function generate_QR(token) {
         let canvas = document.getElementById("canvas");
         let qrInput = document.getElementById("qrInput");
         let token = token;
         //   console.log("generate masuk");
         QRCode.toCanvas(canvas, token, (err) => {
            if (err) console.error(err);
            console.log("scan berhasil");
            qrInput.setAttribute("placeholder", token);
         });
      }

      // membuat token random dengan parameter panjang
      function makeid(length) {
         let result = "";
         const characters =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
         const charactersLength = characters.length;
         let counter = 0;
         while (counter < length) {
            result += characters.charAt(
               Math.floor(Math.random() * charactersLength)
            );
            counter += 1;
         }
         return result;
      }
      console.log(makeid(5));
   </script>
</body>

</html>