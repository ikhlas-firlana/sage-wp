<?php
namespace App\Classes;


class NavActionWalker extends \Walker_Nav_Menu {
    public $customLi = '';
    public $customA = '';
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        $classes = array_map(function($class) {
            if (!str_contains($class, 'menu')) {
                return base64_decode($class);
            }
            return $class;
        }, $item->classes);

        $output .= '<a class="' . implode(" ", $classes) . ' ' . $this->customA . '" href="' . $item->url . '">';
        $output .= $item->title;
        $output .= '</a>';
    }
    function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "{$n}";
    }
}
