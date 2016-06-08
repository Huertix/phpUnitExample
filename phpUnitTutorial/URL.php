<?php
/**
 * Created by PhpStorm.
 * User: huertix
 * Date: 6/7/16
 * Time: 11:49 PM
 */

namespace phpUnitTutorial;


class URL {

    public function sluggify($string, $separator = '-', $maxLength = 96)
    {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
    }
}