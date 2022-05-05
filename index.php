<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html = file_get_contents('invoice.php', false);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream("Ttech-Invoice_".date("YZG"));