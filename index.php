<?php
$api_url = "https://curtain.harehare1554.net/api/time.json";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

$openrr = $data["open"];
$closerr = $data["close"]
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no">
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
    <script src="//accaii.com/harehare1554/script.js" async></script>
  </head>
  <body>
    <noscript><img src="//accaii.com/harehare1554/script?guid=on"></noscript>
    <div class="content">
      <h1>カーテン自動開閉装置<br class="sp">コントロールパネル</h1>
      <form action="./api/index.php">
        <label>開く時刻を設定</label>
        <br>
        <input type="time" id="open" name="open" value=<?= $openrr ?>>
        <br>
        <label>閉まる時刻を設定</label>
        <br>
        <input type="time" id="close" name="close" value=<?= $closerr ?>>
        <br>
        <input class="input" type="submit" id="submit" name="submit" value="登録">
      </form>
      <div class="SourceCode">
        <a href="https://github.com/harehare1554/curtain.harehare1554.net">Source Code</a>
      </div>
    </div>
  </body>
</html>