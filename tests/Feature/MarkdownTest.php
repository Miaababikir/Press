<?php

namespace miaababikir\Press\Tests;


use miaababikir\Press\MarkdownParser;
use Orchestra\Testbench\TestCase;

class MarkdownTest extends TestCase
{

    /** @test */
    public function simple_markdown_is_parsed()
    {
        $this->assertEquals("<h1>Hello it's me!</h1>", MarkdownParser::parse("# Hello it's me!"));
    }

}