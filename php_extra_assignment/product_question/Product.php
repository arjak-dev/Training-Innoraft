<?php

  /**
   * Defines the structure to store the products details 
   * 
   * @var $product_id int 
   * Product Identity
   * 
   * @var $selling_date String 
   * Selling date of the product 
   * 
   * @var $selling_price int
   * Selling price of the products 
   * 
   * @var $total_selling price int 
   * store the total selling price of the products as per the dates
   * 
   * @var $category String
   * The category of the products   
   */
  class Product{
    public $product_id;
    public $selling_date;
    public $selling_price;
    public $total_selling_price;
    public $category;

    /**
     * @param $product_id int 
     * Product Identity number
     * 
     * @param $selling_date String 
     * Selling date
     * 
     * @param $selling price int 
     * Selling price
     * 
     * @param $category String 
     * Category of the product 
     */
    function __construct($product_id, $selling_dates, $selling_price, $category)
    {
      $this->product_id = $product_id;
      $this->selling_date = $selling_dates;
      $this->selling_price = $selling_price;
      $this->category = $category;
      $this->total_selling_price = 0;
    }

    /**
     * Sort the product array accouding to product id 
     * 
     * @param $products Product 
     * Array contains all the product details 
     */
    function productsort($products){
     
      function mysort($a, $b){
        if($a->product_id == $b->product_id){
          return (strtotime($a->selling_date) < strtotime($b->selling_date)) ? -1 : 1;
        }else
        return ($a->product_id < $b->product_id) ? -1 : 1; 
      }
      usort($products,"mysort");
      return $products;
    }

    /**
     * update the total selling price in the product class
     * 
     * @param $products Product
     * Array hold the detaisl of the products in the accending order of the dates and the product id 
     */
    function totalsellingprice($products) {
      foreach ($products as $key => $value) {
        if (array_key_exists($key-1,$products)) {
          if ($value->product_id == $products[$key-1]->product_id) {
            $value->total_selling_price = $value->selling_price + $products[$key-1]->total_selling_price;
          }else{
            $value->total_selling_price = $value->selling_price;
          } 
        }else{
          $value->total_selling_price = $value->selling_price;
        }
      }
      return $products;
    }

    /**
     * count the no. of products in each category
     * 
     * @param $products Product-Array
     * Array contains the details of the products
     * 
     * @return $product_count Array of integers 
     * Category-1 is the index of the array
     * And the hold the value of how many producst are there
     */
    function categorycount($products) {
      $count=1;
      $product_count = []; 
       foreach ($products as $key => $value) {
         if ($value->category == $products[$key + 1]->category){
            $count +=1;
        } else {
          if($count == 1){
            $count = 0;
          }
          array_push($product_count, $count);
          $count =1;
        }
       }
      return $product_count;
    }

    /**
     * Set the category accouding to how many products are available under that category 
     * 
     * @param $products Product-Array 
     * Array contains the details of the product 
     * 
     * @return Product Array with setting the category
     */
    function putcateory($products) {
      $product_count = [];
      $product_count = $this->categorycount($products);
     // print_r($product_count); 
      foreach ($products as $key => $value) {
        $ct = substr($value->category, 1);
        if(array_key_exists($ct-1,$product_count)){
          if ($product_count[$ct-1] != 0){
            $value->category .= "-P".$value->product_id;
            $product_count[$ct-1] -=1; 
          }
        }
      }
     return $products;
    }

    /**
     * Changing the array key according to the category
     * 
     * @param $products Product-Array
     * Array containing the product details
     * 
     * @return $products Product-Array
     * The final array which have the key as the category 
     */
    function putproductkey($products) {
      foreach ($products as $key =>$value) {
         $products[$value->category] = $products[$key];
         unset($products[$key]);
      }
      print_r(json_encode($products));
    }
    
  }