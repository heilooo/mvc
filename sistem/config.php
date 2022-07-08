<?php
$base_url="http://localhost/mvc/";
$base_dir="/mvc/";
$tmp=explode('?',$_SERVER['REQUEST_URI']);
$current_rout=str_replace($base_dir,'',$tmp[0]);
unset($tmp);