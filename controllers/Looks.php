<?php
namespace controllers;
use models\Looks;
class LookControllers extends Base
{
  public static function allLooks()
    {
        $looks = new Looks();
        $data = $looks->getLook();
        echo json_encode($data);
    }
}
