<?php
namespace models;
use lib\Core;
use models\Colors;
use models\Usages;
use models\Applications;
use models\Images;
use models\ConceptImages;
use models\Types;

use PDO;



class Products extends Base
{

    public function getProduct($id = null)
    {

        $products = array();
        if ($id == null or $id == 'all') {
            $temp = $this->db->products();
        } else {
            $temp = $this->db->products()->where('id', $id);
        }
        foreach ($temp as $p) {
            $products[] = array(
                'product_id' => $p['id'],
                'product_brand' => $p['product_brand'],
                'product_name' => $p['product_name'],
                'product_price' => $p['product_price'],
                'product_category' => Types::productType($p['type_id']),
                'product_type_id' => $p['type_id'],
                'product_desc' => $p['product_desc'],
                'product_origin_country' => $p['product_origin_country'],
                'product_degree_of_variation' => $p['product_degree_of_variation'],
                'product_material' => $p['product_material'],
                'product_width' => $p['product_width'],
                'product_height' => $p['product_height'],
                'product_thickness' => $p['product_thickness'],
                'product_w_unit' => $p['product_width_unit'],
                'product_h_unit' => $p['product_height_unit'],
                'product_t_unit' => $p['product_thickness_unit'],
                'product_items_per_box' => $p['product_items_per_box'],
                'product_shape' => $p['product_shape'],
                'product_applications' => Applications::productApplications($p['id']),
                'product_look' => $p['product_look'],
                'product_finish_type' => $p['product_finish_type'],
                'product_usages' => Usages::productUsages($p['id']),
                'product_colors' => Colors::productColors($p['id']),
                'product_img' => Images::productImages($p['id']),
                'product_concepts' => ConceptImages::productConcepts($p['id']),
                'product_features' => $p['product_desc'],
                'product_rating' => $p['product_rating'],
                'product_isDiscountAvailable' => $p['isDiscountAvailable'],
                'product_isProductAvailable' => $p['isProductAvailable']
            );
        }


        return $products;
    }

}
