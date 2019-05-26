<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 26/05/19
 * Time: 06:23 م
 */

namespace miaababikir\Press\Fields;


abstract class FieldContract
{

    public static function process($fieldType, $fieldValue, $data)
    {
        return [
            $fieldType => $fieldValue
        ];
    }

}