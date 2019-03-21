<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Qr Code</title>
  </head>
  <body>
    <div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>
  </body>
  <script type="text/javascript" src="../js/qrcode.js"></script>
  <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
  width : 100,
  height : 100
  });
  	qrcode.makeCode('<?php echo $_REQUEST['qrcode'];?>');
  </script>
</html>
