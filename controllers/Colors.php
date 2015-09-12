<?php
namespace controllers;
use models\Colors;
class ColorsControllers extends Base
{
  public static function allColors()
    {
        $colors = new Colors();
        $data = $colors->getColors();
        echo json_encode($data);
    }
}
