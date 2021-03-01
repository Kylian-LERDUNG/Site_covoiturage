<?php
function getEnglishDate($date){
	$membres = explode('-', $date);
	$date = $membres[2].'/'.$membres[1].'/'.$membres[0];
	return $date;
}

function addJours($date, $nbJours){
	$membres = explode('-', $date);
	$jour = (intval($membres[2])+$nbJours);
	switch(intval($membres[1])){
		case 1:
					if($jour > 31){
						$jour = $jour % 31;
						$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
					}
					if($jour <= 0){
						$jour = 31 + $jour;
						$date = (intval($membres[1])-1).'-'.(intval($membres[1])+11).'-'.$jour;
					}
					break;

		case 2 :
						if($jour > 29 && intval($membres[0])%400 == 0 && intval($membres[0])%4 == 0 && intval($membres[0])%100 != 0){
							$jour = $jour % 29;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour > 28 && intval($membres[0])%400 != 0 && intval($membres[0])%4 != 0 && intval($membres[0])%100 != 0){
							$jour = $jour % 28;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 31 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;


		case 3 :
						if($jour > 31){
							$jour = $jour % 31;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if(intval($membres[0])%400 == 0 && intval($membres[0])%4 == 0 && intval($membres[0])%100 != 0){
							$jour = 29 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						if(intval($membres[0])%400 != 0 && intval($membres[0])%4 != 0 && intval($membres[0])%100 != 0){
							$jour = 28 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}

						break;


		case 4 :
						if($jour > 30){
							$jour = $jour % 30;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 31 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;

		case 5:
						if($jour > 31){
							$jour = $jour % 31;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 30 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 6 :
						if($jour > 30){
							$jour = $jour % 30;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 31 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 7:
						if($jour > 31){
							$jour = $jour % 31;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 30 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 8:
						if($jour > 31){
							$jour = $jour % 31;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 30 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 9 :
						if($jour > 30){
							$jour = $jour % 30;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 31 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 10:
						if($jour > 31){
							$jour = $jour % 31;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 30 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 11 :
						if($jour > 30){
							$jour = $jour % 30;
							$date = $membres[0].'-'.(intval($membres[1])+1).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 31 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
		case 12:
						if($jour > 31){
							$jour = $jour % 31;
							$date = (intval($membres[0])+1).'-'.(intval($membres[1])-11).'-'.$jour;
						}
						if($jour <= 0){
							$jour = 30 + $jour;
							$date = $membres[0].'-'.(intval($membres[1])-1).'-'.$jour;
						}
						break;
	}


	return $date;
}

?>
