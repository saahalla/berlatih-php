<?php

	function papan_catur($angka) {
	// tulis kode di sini
		$papan = "";
		for($i=0; $i<$angka; $i++){
			// $papan .= "#";
			for($j=0; $j<($angka*2)-1; $j++){
				if(
					($j % 2 == 1 && $i % 2 == 1) || ($j % 2 == 0 && $i % 2 == 0)
				){
					$papan .= "#&nbsp;";
				}else{
					$papan .= "&nbsp";
				}

			}
			$papan .= "<BR>";
		}
		return $papan;
	}
	echo papan_catur(4)."<BR>";
	// TEST CASES
	// echo papan_catur(4) ;
	/*
	# # # #
	 # # #
	# # # #
	 # # #
	 */

	echo papan_catur(8)."<BR>";
	/*
	# # # # # # # #
	 # # # # # # # 
	# # # # # # # #
	 # # # # # # # 
	# # # # # # # #
	 # # # # # # #
	# # # # # # # #
	 # # # # # # #
	*/
	echo papan_catur(5)."<BR>"; 
	/*
	# # # # #
	 # # # #
	# # # # #
	 # # # # 
	# # # # #
	*/
