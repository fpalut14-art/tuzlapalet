<?php
$title = "TuzlaPalet";
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars($title) ?></title>
  <style>
    body{font-family:Arial,Helvetica,sans-serif;line-height:1.6;margin:20px}
    header,footer{background:#f2f2f2;padding:10px}
  </style>
</head>
<body>
  <header>
    <h1><?= htmlspecialchars($title) ?></h1>
  </header>
  <main>
    <p>Bu bir örnek PHP index.php dosyasıdır. Site düzgün çalışıyorsa bu mesajı görmelisiniz.</p>
    <p>Sunucu saati: <?= date('d.m.Y H:i:s') ?></p>
  </main>
  <footer>
    <p>&copy; <?= date('Y') ?> TuzlaPalet</p>
  </footer>
</body>
</html>
