<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 18/05/19
 * Time: 11:35 م
 */

namespace miaababikir\Press;


use Illuminate\Support\Facades\File;

class PressFileParser
{
    protected $filename;

    protected $data;

    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->splitFile();
    }

    public function getData()
    {
        return $this->data;
    }

    protected function splitFile()
    {
        preg_match(
            '/^\-{3}(.*?)\-{3}(.*)/s',
            File::get($this->filename),
            $this->data
        );
    }

}