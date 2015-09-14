<?php
namespace controllers;
use models\Shapes;
class ShapeControllers extends Base
{
  public static function allShapes()
    {
        $shapes = new Shapes();
        $data = $shapes->getShape();
        echo json_encode($data);
    }
}
