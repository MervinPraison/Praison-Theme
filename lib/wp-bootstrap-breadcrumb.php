<?php

function wps_mervin_breadcrumb_bootstrap() {
    if ( function_exists( 'get_mervin_breadcrumbs' ) ) {
        $breadcrumb = get_mervin_breadcrumbs(
            '<ul class="breadcrumb"><li>',
            '</li></ul>',
            false
        );
        echo str_replace( '»', '</li><li>', $breadcrumb );
    }elseif ( function_exists( 'yoast_breadcrumb' ) ) {
        $breadcrumb = yoast_breadcrumb(
            '<ul class="breadcrumb"><li>',
            '</li></ul>',
            false
        );
        echo str_replace( '»', '</li>»<li>', $breadcrumb );
    }
}

//wps_mervin_breadcrumb_bootstrap();