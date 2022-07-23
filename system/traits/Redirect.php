<?php

namespace System\Traits;
trait Redirect
{
    protected function redirect($url)
    {
        global $base_dir;
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
        header('location: ' . $protocol . $_SERVER['HTTP_HOST'] . $base_dir . $url);
    }

    protected function back($url)
    {
        $http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
        if ($http_referer != null)
            header('location: ' . $_SERVER['HTTP_REFERER']);
        else
            echo 'rout not found';
    }
}