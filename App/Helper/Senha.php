<?php
/**
 * Created by PhpStorm.
 * User: 00120911205
 * Date: 08/03/2018
 * Time: 19:46
 */

namespace App\Helper;


class Senha
{
    static public function gerar($senha)
    {
        return md5($senha);
    }

}