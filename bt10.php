<?php
//chuyen ki tu thuong thanh Hoa
//su dung strtoupper
  $arrs=['1','B','C','E'];
  for($i=0;$i<count($arrs);$i++){
    $arrs[$i] = strtoupper($arrs[$i]);
  }
  var_dump($arrs);
  echo '<br>';

  $arrs2= ['a', 0, null, false];
  for($i=0;$i<count($arrs2);$i++){
    $arrs2[$i] = strtoupper($arrs2[$i]);
  }
  var_dump($arrs2);