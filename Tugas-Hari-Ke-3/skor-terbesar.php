<?php
function skor_terbesar($arr){
//kode di sini
  $nilai = array_column($arr, "nilai");
  // $kelas = array_column($arr, "kelas");
  array_multisort($nilai, SORT_ASC);
  foreach($arr as $key => $value){
    $arrBaru[$value["kelas"]] = [
      "nama" => $value["nama"],
      "kelas" => $value["kelas"],
      "nilai" => $value["nilai"]
    ];
  }

  // ksort($arrBaru);
  return $arrBaru;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>