<?php
//chuyen ki tu hoa thanh ki tu thuong
  $arrs =['1','B','C','E'];
//sudung strtolower, print_r
  for($i=0;$i<count($arrs);$i++){
    $arrs[$i] = strtolower($arrs[$i]);
  }
  var_dump($arrs);

  $arrs2 =['a',0,null,false];
  for($i=0;$i<count($arrs2);$i++){
    $arrs2[$i] = strtolower($arrs2[$i]);
  }
  var_dump($arrs2);
