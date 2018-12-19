<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 17:13
 */

namespace console;

class Install
{
    public static function postInstall()
    {
        rename('config-example', 'config');
    }
}