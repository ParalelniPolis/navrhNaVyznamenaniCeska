<?php
//navrhNaVyznamenaniCzechie

$name = htmlspecialchars($_GET['name'], ENT_QUOTES);

//html output
require 'paper.php';

//composer autoload
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'Helvetica');
$dompdf->loadHtml(returnHtmlPaper($name));

// Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
