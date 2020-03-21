<?php

$string= '<!-- wp:image {"id":2685} --> <figure class="wp-block-image"><img src="https://cronache.test/wp-content/uploads/2020/02/fondazioneveronesi.jpg" alt="" class="wp-image-2685"/><figcaption>Ph Fondazione Veronesi</figcaption></figure> <!-- /wp:image --> <!-- wp:paragraph --> <p></p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>A proposito di assenzio e di junk food, le colonie di benpensanti sulle due sponde dell\'Atlantico si spendono facilmente a favore delle droghe leggere. Un musicista americano, profondo conoscitore del jazz e che stimo, ha pubblicato la solita tiritera dell\'origine del veto alla cannabis, certamente in buona fede. Riportava correttamente che il bando fu deciso da interessi economici e aveva ragione: per quanto ne so io, la cannabis contrastava gli interessi di chi utilizzava la cellulosa di legno, proprio alla vigilia degli investimenti cospicui di William Randolph Hearst, che aveva acquistato foreste intere per farsi la carta. E del gruppo chimico Dupont. Vi sono capitate le pipette (talvolta in schiuma) da signora, espressamente destinate alle donne per lenire i loro fastidi dalle mestruazioni alla cefalea? La cannabis era prescritta dal medico.<br>Ma i tempi sono cambiati, e la cannabis non si utilizza più come fibra industriale. Oggi chi la compra nella stragrande maggioranza lo fa per sballare ed è nociva e pericolosa. Emerge quella che Pasolini tra gli altri definiva una cultura edonista, subdolamente associata al concetto rafforzativo di libertà e democrazia. No, nessuno dice che per affermare la tua libertà devi sballare e penso a ragione che la cannabis produca spesso una assuefazione sociale a tutte le droghe, anche le più pesanti. Personalmente dico che non è giusto moralmente e che le droghe dove e quando si usano richiedono una iniziazione rigorosa; il fine di quelle esperienze quando non è la sopravvivenza è la espansione della coscienza, tutto il contrario dello sballo.<br>Si fanno guerre per difendere il modello consumista. Inoltre il musicista americano definiva "razzista" la semplice, evidente constatazione che i musicisti (e poi tutto l\'ambiente del Rock) ne fanno un uso intenso. Non c\'è peggior sordo e cieco di chi non voglia arrendersi alla realtà. E mi trovo da solo contro un pollaio di contestatori in stile neo-hippie. Che c\'entra il razzismo?<br>Le droghe furono seguite dalla CIA in un programma molto complesso e gelosamente nascosto alla opinione pubblica per quanto mirasse alla loro diffusione e al controllo delle persone che ne facevano uso, M-K-ULTRA. Si commisero azioni criminali pur di sperimentarla, il più delle volte alla insaputa delle vittime. In un primo momento ci si concentrò sugli allucinogeni e fu la stagione dello LSD. Si lavorò a fondo nei campi universitari e nell\'ambiente studentesco in genere. Intellettuali e artisti entusiasti furono coinvolti e strumentalizzati. Fino ai nostri giorni e alle esperienze dell\'ISIS, che ricordano le gesta degli Assassini puntigliosamente. Cosa è cambiato? Le modalità degli attentati terroristici: gli attentatori sono condotti sul luogo dell\'attentato e dopo l\'impresa spesso abbattuti da agenti appostati a due passi. Sono in circolazione sostanze che ti rovinano la mente dopo una dose soltanto. Cosa ormai vecchia e risaputa (ma guarda!) la associazione tra droghe di tutti i tipi e il sesso.</p> <!-- /wp:paragraph -->';
$string= '<!-- wp:paragraph --> <p>Università degli Studi di Bari: una prima analisi sulla diffusione del COVID-19 in Italia</p> <!-- /wp:paragraph --> <!-- wp:image {"id":2865} --> <figure class="wp-block-image"><img src="https://cronachemediterranee.org/wp-content/uploads/2020/03/pag1.jpg" alt="" class="wp-image-2865"/></figure> <!-- /wp:image --> <!-- wp:image {"id":2866} --> <figure class="wp-block-image"><img src="https://cronachemediterranee.org/wp-content/uploads/2020/03/pag2.jpg" alt="" class="wp-image-2866"/></figure> <!-- /wp:image --> <!-- wp:image {"id":2867} --> <figure class="wp-block-image"><img src="https://cronachemediterranee.org/wp-content/uploads/2020/03/pag3.jpg" alt="" class="wp-image-2867"/></figure> <!-- /wp:image --> <!-- wp:image {"id":2868} --> <figure class="wp-block-image"><img src="https://cronachemediterranee.org/wp-content/uploads/2020/03/pag4.jpg" alt="" class="wp-image-2868"/></figure> <!-- /wp:image --> <!-- wp:image {"id":2869} --> <figure class="wp-block-image"><img src="https://cronachemediterranee.org/wp-content/uploads/2020/03/pag5.jpg" alt="" class="wp-image-2869"/></figure> <!-- /wp:image --> <!-- wp:image {"id":2870} --> <figure class="wp-block-image"><img src="https://cronachemediterranee.org/wp-content/uploads/2020/03/pag6.jpg" alt="" class="wp-image-2870"/></figure> <!-- /wp:image -->';


function countPostChar( $content ){

	$string = htmlspecialchars($content);
	$count='';
	$paragraph='';
	$string_test=$string;
	$string = str_split($string);
	foreach ( $string as $key => $value ) {
		
		// echo $string[$key+36];
		// echo '<br>';
		// echo print_r($string);
		// echo $string_test;
		// die;
		$paragraph.= $string[$key];

		
		if( array_key_exists($key+1, $string) &&
			array_key_exists($key+2, $string) &&
			array_key_exists($key+3, $string) &&
			array_key_exists($key+4, $string) &&
			$string[$key] == ';' &&  $string[$key+1] == 'p' ){
				while ( $string[$key] <> '&' &&
						$string[$key] <> '1' &&
						$string[$key] <> &&
						$string[$key] <> &&
						$string[$key] <> &&
				) {
					# code...
				}
		}
	}
		// echo json_encode($paragraph);
		return strlen($paragraph);
}

echo countPostChar( $string );


// 3000 + pic art recent prospettive  archivi  donazione



?>
