<?php
require 'vendor/autoload.php';
date_default_timezone_set("Asia/Kolkata");

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$options->set('tempDir', '/tmp');
$options->set('chroot', __DIR__);

$dompdf = new Dompdf($options);
/*$html = file_get_contents('invoice.php', false);
$replacedSting=str_replace("[[name]]",$user->name,$html);
//echo $replacedSting;
$dompdf->loadHtml($replacedSting);*/
ob_start();
require __DIR__ . "/invoice.php";
$dompdf->loadHtml(ob_get_clean());
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream("Ttech-Invoice_".date("YZG"));