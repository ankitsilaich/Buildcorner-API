<?php
namespace controllers;
use models\Usages;
class UsageControllers extends Base
{
  public static function allUsages()
    {
        $usages = new Usages();
        $data = $usages->getUsage();
        echo json_encode($data);
    }
}
