<?php

if (!function_exists('get_code_group')) {
    function get_code_group($code)
    {
        return \App\Models\ComCode::where('code_group', $code)->pluck('code_nm', 'code_cd');
    }
}


if (!function_exists('is_mobile')) {
    function is_mobile()
    {
        $detect = new \Detection\MobileDetect;
        return $detect->isMobile();
    }
}