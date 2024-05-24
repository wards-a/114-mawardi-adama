<?php
function active_menu($path) {
    // dd(request()->path(), $path);
    if (str_contains('/'.request()->path(), $path)) {
        return 'menu-active';
    } else {
        return '';
    }
}

function submenu_active($path) {
    // dd(request()->path(), $path);
    if (str_contains('/'.request()->path(), $path)) {
        return 'menu-active';
    } else {
        return '';
    }
}
?>