<?php 
	
	function generatorBirthday( $year_start = 1910 ) {

		$year	= rand($year_start, date('Y'));
		$month 	= rand(1,12);

		if( ( $month<8 && ($month%2)!=0 ) || ($month>=8 && ($month%2)==0) ) {
			// Month return 31 days
			$day = rand(1,31);
		} else {
			if( $month == 2 ) {
				if($year%4==0) {
					// Bissesto year with 29 days
					$day = rand(1,29);
				} else {
					// Month return 28 days
					$day = rand(1,28);
				}
			} else {
				// Month return 30 days
				$day = rand(1,30);
			}
		}

		$day = ($day < 10) ? '0'. $day : $day;
		$month = ($month < 10) ? '0' . $month : $month;

		return $day . '/' . $month . '/' . $year;
	}
	
	function generatorName() {
		
		$array_first_name = array(
			"Eduardo", 
			"Roberto", 
			"Pedro", 
			"Marcos", 
			"Julia", 
			"Caroline", 
			"Inajara",
			"Raquel",
			"Luiza",
			"Bruno",
			"Danieli",
			"William",
			"Maurício",
			"Christian",
			"Cláudia",
			"Manoel"
		);

		$array_second_name = array(
			"da Silva", 
			"Oliveira", 
			"Forte", 
			"Azambuja", 
			"Ferreira", 
			"Soares", 
			"Pedroso"
		);

		$array_last_name = array(
			"Thomaz",
			"Schinoff",
			"Heck",
			"Rocha",
			"Sanchez",
			"Martins",
			"Iturria",
			"Mendes",
			"Ayala"
		);

		return $array_first_name[array_rand( $array_first_name, 1 )] . ' ' . $array_second_name[array_rand( $array_second_name, 1 )] . ' ' . $array_last_name[array_rand( $array_last_name, 1 )];
	}

	function generatorSchooling() {
		$array_schooling = array(
			'Ensino Fundamental',
			'Ensino Médio',
			'Graduação',
			'Pós Graduação',
			'Mestrado',
			'Doutorado',
			'Pós Doutorado'
		);

		return $array_schooling[array_rand($array_schooling, 1)];
	}

?>