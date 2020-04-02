<?php

$string = '<!-- wp:image {"id":1597,"width":581,"height":306} --> <figure class="wp-block-image is-resized"><img src="https://cronache.test/wp-content/uploads/2019/08/Jerusalem-2.png" alt="" class="wp-image-1597" width="581" height="306"/></figure> <!-- /wp:image --> <!-- wp:paragraph --> <p> Bernardo Bertolucci passed away earlier this year, just six years after his last film (Me and You, 2012). But despite his age (77) and health difficulties, he was determined to go on directing – a dream that died a premature death. It is a shame, particularly in such charged times, when fascism has been on a rise unprecedented since World War II. Now, Italy needs his voice more than ever: a pristine voice that always spoke about his country’s past and present and was motivated by a desire to fight the fascist winds that lingered above, threatening to spread through it—as indeed, they eventually did.<br>Bertolucci’s devotion to these matters was already visible at the beginning of his professional life, when in his early twenties he directed The Grim Reaper (1962) and Before the Revolution (1965). Many of the characteristics that would go on to define the Italian director’s work made their mark even then: his interest in topics such as generation gaps and the stage at which individuals construct their identities; his tendency to juxtapose the bourgeoisie and the revolutionary; his talent to provide a precise sense of time and place; above all, and perhaps his most pronounced quality: the ability to deal with weighty topics such as history, society, and politics in a manner that was not only intellectual, and certainly not cold, but rather, full of passion and emotion.<br>This is also evident in 1900 (1976), his impressive period piece which has recently been restored, and in a film of less production value, but an even more complex screenplay, The Spider’s Stratagem, which Bertolucci defined as his favorite work, perhaps because it was his most complex and philosophical, and as such, somewhat exceptional in his filmography. Still, here too, the shadows of lingering fascism are faced by those who refused to surrender.<br>Bertolucci is no longer with us. Political extremism, unfortunately, is – but so is the legacy of a filmmaker who was unwilling to raise a white flag. </p> <!-- /wp:paragraph -->';



function countPostChar( $content ){

	 $string = htmlspecialchars_decode($content);
	 $count='';
	 $paragraph='';
	 $string_test=$string;
	 $string = str_split($string);
	 $counter = count($string);
	 for ($i=0; $i < $counter ; $i++) { 
	     //echo htmlspecialchars_decode($string[$i+1]);
	     //die;
	    
	    if( array_key_exists($i+1, $string) && 
	       array_key_exists($i+2, $string) && 
	       array_key_exists($i+3, $string) &&
	       array_key_exists($i+4, $string) &&
	       htmlspecialchars_decode($string[$i]) == '<' &&
	       htmlspecialchars_decode($string[$i+1]) == 'p' //&&
	       //htmlspecialchars_decode($string[$i+2]) == '>'

	    ){
	    	if( htmlspecialchars_decode($string[$i+2]) == '>' ){

		       $i= $i+3;

	    	}elseif( htmlspecialchars_decode($string[$i+2]) !== '>' &&
	    	substr_count($content,'p class="') ){
	    		$i=$i+41;
	    	}

	       for ($j=$i; $j < $counter  ; $j++) { 
	          if (htmlspecialchars_decode($string[$i]) == '<' && htmlspecialchars_decode($string[$i+1]) == '/' && htmlspecialchars_decode($string[$i+2]) == 'p'){
	             $j=0;
	             break;
	          }
	          $paragraph.= htmlspecialchars_decode($string[$i]);
	          $i++;

	       }//nested for

	    }// if

	 }//for
	 $extra_char = (substr_count($content, 'img src')-2)*1000;
	 $extra_video = substr_count($content,'wp-block-embed-youtube')*1000;
	 echo $paragraph;
	 return strlen($paragraph) + $extra_char + $extra_video;
}

echo countPostChar( $string );


// 3000 + pic art recent prospettive  archivi  donazione



?>
