<?php
/**
 * Created by PhpStorm.
 * User: 00120911205
 * Date: 15/03/2018
 * Time: 20:55
 */

namespace App\Helper;


class Data
{
    static public function get($data)
    {
        if (!empty($data))
            return date("d/m/Y", strtotime($data));
        else return "";
    }

    static public function set($data)
    {
        $data = str_replace('/', '-', $data);
        return date("Y-m-d", strtotime($data));
    }
}
