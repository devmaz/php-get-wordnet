<?php 


$s = (isset($_GET['s']))?$_GET['s']:'';

$url = "http://wordnetweb.princeton.edu/perl/webwn?s=$s";

 

$out = file_get_contents($url );
//print_r($out);

$begin = strpos($out,'<h3>Noun</h3>');
$wncontent = substr($out,$begin);
$wncontent = strip_tags($wncontent, '<h3><ul><li>');
print_r($wncontent );


?>