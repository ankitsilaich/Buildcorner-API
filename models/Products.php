<?php
namespace models;
use lib\Core;
use models\Colors;
use PDO;



class Products extends Base
{

    public function getProduct($id = null)
    {
        $product_category = array();
        $products         = array();
        $usages           = array();
        $applications     = array();
        $images           = array();
        // $colors           = array();
        $concepts         = array();
        // foreach ($this->db->product_colors()->where('products_id', $id) as $product_colors) {
        //     $colors[] = $product_colors['color_name'];
        // }
        foreach ($this->db->product_usages()->where('products_id', $id) as $product_usages) {
            $usages[] = $product_usages['usage_name'];
        }
        foreach ($this->db->product_applications()->where('products_id', $id) as $product_applications) {
            $applications[] = $product_applications['application_name'];
        }
        foreach ($this->db->product_images()->where('products_id', $id) as $product_images) {
            $images[] = $product_images['image_name'];
        }
        foreach ($this->db->concept_images()->where('products_id', $id) as $product_images) {
            $concepts[] = $product_images['concept_name'];
        }
        if ($id == null or $id == 'all') {
            $temp = $this->db->products();
        } else {
            $temp = $this->db->products()->where('id', $id);
        }
        foreach ($this->db->types() as $product_type) {
            if ($product_type['id'] == $temp['type_id'])
                $product_category = $product_type['type_name'];
        }

        foreach ($temp as $p) {
                        // $products['product_category']=$product_category
            $products[] = array(
                'product_id' => $p['id'],
                'product_brand' => $p['product_brand'],
                'product_name' => $p['product_name'],
                'product_price' => $p['product_price'],
               	'product_category' => $product_category,
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
                'product_applications' => $applications,
                'product_look' => $p['product_look'],
                'product_finish_type' => $p['product_finish_type'],
                'product_usages' => $usages,
                'product_colors' => Colors::productColors($p['id']),
                'product_img' => $images,
                'product_concepts' => $concepts,
                'product_features' => $p['product_desc'],
                'product_rating' => $p['product_rating'],
                'product_isDiscountAvailable' => $p['isDiscountAvailable'],
                'product_isProductAvailable' => $p['isProductAvailable']
            );
        }


        return $products;
    }

}
