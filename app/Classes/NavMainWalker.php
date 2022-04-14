<?php
namespace App\Classes;


class NavMainWalker extends \Walker_Nav_Menu {
    public $customLi = '';
    public $customA = 'inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-indigo-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center';
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        $output .= "<span class='" .  implode(" ", $item->classes) . " ".$this->customLi."'>";
        if ($item->url && $item->url != '#') {
            $output .= '<a class="'.$this->customA.'" href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }
        $output .= $item->title;
        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
    function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</span>{$n}";
    }
}
