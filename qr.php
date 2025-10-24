<?php
$website = "http://localhost/ketan_bubuk/";
header('Content-Type: image/png');
$qrUrl = "https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=" . urlencode($website);
echo file_get_contents($qrUrl);
?>