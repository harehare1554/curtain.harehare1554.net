<?php

$arr = htmlspecialchars($_GET["open"]);
$brr = htmlspecialchars($_GET["close"]);

$crr = json_encode(array("open" => $arr, "close" => $brr));

file_put_contents("time.json", $crr);

?>

<!DOCTYPE html>
  <html lang="ja">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="refresh" content="1;URL=../">
      <link rel="stylesheet" href="css/style.css">
      <title>カーテン自動開閉装置コントロールパネル</title>
      <script src="//accaii.com/harehare1554/script.js" async></script>
    </head>
    <body>
      <noscript><img src="//accaii.com/harehare1554/script?guid=on"></noscript>
      <div class="content">
        <svg width="30" height="30" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40"/></svg> 
        <h1>登録しています...</h1>
      </div>
    </body>
  </html>

