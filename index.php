<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="../api/index.php">
    <title>カーテン自動開閉装置コントロールパネル</title>
    <link rel="icon" href="../img/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/apple-touch-icon-152x152.png">
    <link rel="manifest" href="manifest.webmanifest" crossorigin="use-credentials">
    <script>
      window.addEventListener('load', function () {
        if ('serviceWorker' in navigator) {
          navigator.serviceWorker.register("/sw.js")
          .then(function (registration) {
            console.log("serviceWorker registed.");
          }).catch(function (error) {
            console.warn("serviceWorker error.", error);
          });
        }
      });
    </script>
  </head>
  <body>
    <script src="//accaii.com/harehare1554/script.js" async></script><noscript><img src="//accaii.com/harehare1554/script?guid=on"></noscript>
    <div class="content">
      <h1>カーテン自動開閉装置コントロールパネル</h1>
      <form action="./api/index.php">
        <label>開く時刻を設定</label><input type="time" id="open" name="open">
        <br>
        <label>閉まる時刻を設定</label><input type="time" id="close" name="close"><br>
        <input type="submit" id="submit" name="submit" value="登録">
      </form>
    </div>

    <?php

    $open = (!empty($_POST['open']) ? $_POST['open'] : '');

    $close = (!empty($_POST['close']) ? $_POST['close'] : '');

    $arr["time"] = $open;

    $brr["time"] = $close;

    ?>

  </body>
</html>