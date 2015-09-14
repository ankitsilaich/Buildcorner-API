<?php
namespace controllers;
use models\Products;
class ProductControllers extends Base
{
  public static function allProducts($id=null)
    {
        $products = new Products();
        $data = $products->getProduct($id);
        echo json_encode($data);
    }
}
