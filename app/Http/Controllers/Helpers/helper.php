<?php




if (!function_exists('getProfileImg')) {
    function getProfileImg($name): string {
        return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
    }
}

if (!function_exists('breadcrump')) {
    function breadcrump():string {
        $path = request()->path(); // full path
        $path = str($path)->after('backend/');
         return $path?: 'Unknown';
    }
}




