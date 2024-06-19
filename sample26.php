<?php
// date_default_timezone_set("Asia/Tokyo");
// $time = time();
// $format_date = date("Y/m/d", $time);
// echo $format_date;

$today = new DateTime();
$today->setTimeZone(new DateTimeZone("Asia/Tokyo"));
echo $today->format("Y/m/d");
