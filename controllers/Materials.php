<?php
namespace controllers;
use models\Materials;
class MaterialControllers extends Base
{
  public static function allMaterials($id=null)
    {
        $materials = new Materials();
        $data = $materials->getMaterial($id);
        echo json_encode($data);
    }
}
