<?php
  class Product{
    public $product_id;
    public $selling_date;
    public $selling_price;
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
      $this->selling_dates = $selling_dates;
      $this->selling_price = $selling_price;
      $this->category = $category;
    }

    /**
     * Sort the product array accouding to product id 
     * 
     * @param $products Product 
     * Array contains all the product details 
     */
    function productsort(){

    }

  }