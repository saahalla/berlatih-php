<?php
function skor_terbesar($arr){
//kode di sini
  $nilai = array_column($arr, "nilai");
  array_multisort($nilai, SORT_ASC, $arr);
  foreach($arr as $key => $value){
    $arrBaru[$value["kelas"]] = $value;
  }
  foreach($arrBaru as $k => $val){
    if($val["kelas"]=="Laravel"){
      $arrNew["Laravel"] = $val;
    }elseif($val["kelas"]=="React Native"){
      $arrNew["React Native"] = $val;
    }elseif($val["kelas"]=="React JS"){
      $arrNew["React JS"] = $val;
    }
  }

  ksort($arrNew);
  return $arrNew;
    
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