<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tes QR</title>
  </head>
  <style>

    /* #reader {
      width: 500px;
    } */

    .result {
      background-color: green;
      color: #fff;
      padding: 20px;
    }

    .row {
      width: 400px;
      /* display: flex; */
    }
  
    #reader__scan_region {
      background: white;
    }
  </style>
  <body>
    
    <!-- QR SCANNER CODE BELOW  -->
    <div class="row">
      <h1>QR Code Reader Seminar</h1>
      <div class="col">
        <div id="reader"></div>
      </div>
      <div class="col" style="padding: 30px">
      <center>

        <h4>Scan Result</h4>
        <div id="result">Result goes here</div>
        <form action="<?= base_url('admin/cek_token'); ?>" method="post">
          <input type="text" name="token" id="result2" value="" hidden>
          <input type="submit" id="submit" hidden>
        </form>
      </center>
      </div>
    </div>

    <script src="<?= base_url('assets'); ?>/html5-qrcode/html5-qrcode.min.js"></script>
    <script>
      // When scan is successful fucntion will produce data
      function onScanSuccess(qrCodeMessage) {
         document.getElementById("result").innerHTML ='<span class="result">' + qrCodeMessage + "</span>";
         
        //  mengisi form dengan value sesuai isi kontent yang berada didalam qr
         document.getElementById("result2").setAttribute("value", qrCodeMessage);

        //  otomatis submit
         document.getElementById("submit").click();
      }
      



      // function onScanSuccess(qrCodeMessage) {
      //   document.getElementById("result2").setAttribute('value',qrCodeMessage);
      // }

      // When scan is unsuccessful fucntion will produce error message
      function onScanError(errorMessage) {
        // Handle Scan Error
      }

      // Setting up Qr Scanner properties
      var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
        fps: 10,
        qrbox: 250,
      });

      // in
      html5QrCodeScanner.render(onScanSuccess, onScanError);
    </script>
  </body>
</html>
