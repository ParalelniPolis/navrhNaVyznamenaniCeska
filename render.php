<?php
//navrhNaVyznamenaniCzechie
$coolReasons = [
	'Zasloužil se o rozvoj Česka v zahraničí', 
	'V důsledku jeho/její přínosu se ekonomika Česka významně rozvinula', 
	'Kvalitně reprezentoval Česko na mezinárodní scéně'
];

$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$type = htmlspecialchars($_GET['reason'], ENT_QUOTES);

if ($type == 'custom')
	$reason = htmlspecialchars($_GET['reason-custom-text'], ENT_QUOTES);
else 
	$reason = $coolReasons[array_rand($coolReasons)];


//html output
require 'paper.php';

//composer autoload
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$dompdf->set_option('defaultFont', 'Helvetica');
$dompdf->loadHtml(returnHtmlPaper($name, $reason));

// Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
