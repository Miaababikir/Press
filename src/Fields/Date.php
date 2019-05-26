<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 26/05/19
 * Time: 05:31 م
 */

namespace miaababikir\Press\Fields;


use Carbon\Carbon;

class Date extends FieldContract
{
    public static function process($type, $value, $data)
    {
        return [
            $type => Carbon::parse($value)
        ];
    }
}