<?php
$dt1 = new DateTime('now', new DateTimeZone('Asia/Ulan_Bator'));
print $dt1->format('Y年m月d日H時i分');
$dt2 = new DateTime('now', new DateTimeZone('America/Virgin'));
print $dt2->format('Y年m月d日H時i分');
$dt3 = new DateTime('now', new DateTimeZone('Europe/London'));
print $dt3->format('Y年m月d日H時i分');
