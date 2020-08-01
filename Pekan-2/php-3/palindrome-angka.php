<?php
// Soal 1
/*
Buatlah sebuah file dengan nama palindrome-angka.php. Di dalam file tersebut buatlah sebuah function dengan nama palindrome_angka yang menerima sebuah parameter berupa integer. function tersebut memproses angka tersebut dan mengembalikan angka selanjutnya yang merupakan sebuah palindrome. contoh jika parameter nya angka 38 maka function akan mereturn 44 yang merupakan angka palindrome. Jika parameter yang diberikan merupakan sebuah angka palindrome, maka function me-return angka selanjutnya yang merupakan palindrome. Contoh jika parameter nya angka 6 maka akan mereturn angka 7 yang merupakan palindrome selanjutnya. (Note: angka 0 sampai 9 adalah palindrome)
*/
function reverseStringPalindrome($a){
	$a = "$a";
	$reverse = "";
	for($i=(strlen($a)-1); $i>=0; $i--){
		$reverse .= $a[$i];
	}
	return $reverse;
}
function palindrome($a){
	$b = reverseStringPalindrome($a);
	$result = false;
	if($a == $b){
		$result = true;
	}
	return $result;
}
// echo palindrome(1221);
function palindrome_angka($angka){
	// tulis kode di sini
	if($angka >= 1 && $angka <=8){
		return $angka + 1;
	}
	if(palindrome($angka)){
		$angka++;
	}
	while(palindrome($angka)==false){
		$angka++;
	}
	return $angka;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<BR>".palindrome_angka(10); // 11
echo "<BR>".palindrome_angka(117); // 121
echo "<BR>".palindrome_angka(175); // 181
echo "<BR>".palindrome_angka(1000); // 1001

?>