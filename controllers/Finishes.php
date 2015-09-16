<?php
namespace controllers;
use models\Finishes;
class FinishControllers extends Base
{
  public static function allFinishes()
    {
        $finishes = new Finishes();
        $data = $finishes->getFinish();
        echo json_encode($data);
    }
}
