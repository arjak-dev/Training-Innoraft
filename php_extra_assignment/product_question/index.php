<?php
  include('Product.php');
  $array = [
    ['pd' => 1, 'sp' => 5, 'sd' => '4thFeb', 'ct' => 'C1'],
    ['pd' => 1, 'sp' => 15, 'sd' => '5thFeb', 'ct' => 'C1'],
	  ['pd' => 2, 'sp' => 50, 'sd' => '4thFeb', 'ct' => 'C1'],
	  ['pd' => 3, 'sp' => 40, 'sd' => '6thFeb', 'ct' => 'C2'],
    ['pd' => 2, 'sp' => 75, 'sd' => '3rdFeb', 'ct' => 'C1'],
	  ['pd' => 2, 'sp' => 65, 'sd' => '7thFeb', 'ct' => 'C1'],
    ['pd' => 4, 'sp' => 190, 'sd' => '8thFeb', 'ct' => 'C2'],
  ];
  $i = 0;
  foreach ($array as $key => $value){
    $products[$i] = new Product($value['pd'], $value['sd'], $value['sp'], $value['ct']);
    $i += 1;
  }
  