<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected function guid()
    {
        if (function_exists('com_create_guid')) {
            $uuid = com_create_guid();
        } else {
            mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
            $uniqid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid   = chr(123)// "{"
                      . substr($uniqid, 0, 8) . $hyphen . substr($uniqid, 8, 4) . $hyphen
                      . substr($uniqid, 12, 4) . $hyphen . substr($uniqid, 16, 4) . $hyphen
                      . substr($uniqid, 20, 12) . chr(125);// "}"
        }
        $uuid = str_replace(['-', '{', '}'], '', $uuid);

        return $uuid;
    }
}
