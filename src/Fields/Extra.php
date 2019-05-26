<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 26/05/19
 * Time: 06:11 م
 */

namespace miaababikir\Press\Fields;


class Extra extends FieldContract
{

    public static function process($type, $value, $data)
    {
        $extra = isset($data['extra']) ? (array)json_decode($data['extra']) : [];

        return [
            'extra' => json_encode(array_merge($extra, [
                $type => $value
            ]))
        ];
    }


}