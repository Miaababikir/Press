<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 18/05/19
 * Time: 11:10 م
 */

namespace miaababikir\Press;


class MarkdownParser
{

    static function parse($string) {
        return \Parsedown::instance()->text($string);
    }

}