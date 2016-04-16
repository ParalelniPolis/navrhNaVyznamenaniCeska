<?php

function returnHtmlPaper($name, $reason) {
	$output = '
	<body style="font-family: DejaVu Sans;">
		<p>
			Tímto navrhuji osobu 
		</p>
		<p>
			'.$name.'
		</p>
		<p>
			na státní vyznamenání Česka s důvodem: 
		</p>
		<p>
			'.$reason.'
		</p>
		<p>
			Zasláno na adresu: Pražský hrad, Praha, Česko
		</p>
	</body>
	';
	
	return $output;
}