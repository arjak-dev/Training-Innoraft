<?php
  include('Product.php');
  $array = [
    ['pd' => 1, 'sp' => 5, 'sd' => '4/02/2020', 'ct' => 'C1'],
    ['pd' => 1, 'sp' => 15, 'sd' => '5/02/2020', 'ct' => 'C1'],
	  ['pd' => 2, 'sp' => 50, 'sd' => '4/02/2020', 'ct' => 'C1'],
	  ['pd' => 3, 'sp' => 40, 'sd' => '6/02/2020', 'ct' => 'C2'],
    ['pd' => 2, 'sp' => 75, 'sd' => '3/02/2020', 'ct' => 'C1'],
	  ['pd' => 2, 'sp' => 65, 'sd' => '7/02/2020', 'ct' => 'C1'],
    ['pd' => 4, 'sp' => 190, 'sd' => '8/02/2020', 'ct' => 'C2'],
  ];
  $i = 0;
  foreach ($array as $key => $value){
    $products[$i] = new Product($value['pd'], $value['sd'], $value['sp'], $value['ct']);
    $i += 1;
  }
 
  $sortedproducts = $products[0]->productsort($products);
  print_r(json_encode($products[0]->totalsellingprice($sortedproducts)));
