<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 26/05/19
 * Time: 05:45 م
 */

namespace miaababikir\Press\Fields;


use miaababikir\Press\MarkdownParser;

class Body extends FieldContract
{

    public static function process($type, $value, $data)
    {
        return [
            $type => MarkdownParser::parse($value)
        ];
    }

}