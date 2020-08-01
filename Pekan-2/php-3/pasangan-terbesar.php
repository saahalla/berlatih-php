<?php
// Looping, Cari Substr 

function pasangan_terbesar($angka){
// kode di sini
	$terbesar = substr($angka, 0, 2);
	for($i = 0; $i<= strlen($angka)-2; $i++){
		$pasangan = substr($angka, $i, 2);
		if($pasangan > $terbesar){
			$terbesar = $pasangan;
		}
	}
	return $terbesar."<BR>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>