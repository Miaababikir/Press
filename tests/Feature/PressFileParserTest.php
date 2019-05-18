<?php
/**
 * Created by PhpStorm.
 * User: miaababikir
 * Date: 18/05/19
 * Time: 11:36 م
 */

namespace miaababikir\Press\Tests\Feature;


use miaababikir\Press\PressFileParser;
use Orchestra\Testbench\TestCase;

class PressFileParserTest extends TestCase
{
    /** @test */
    public function the_head_and_body_get_split()
    {
        $preseFileParser = (new PressFileParser(__DIR__ . '/../blogs/MarkFile1.md'));

        $data = $preseFileParser->getData();

        $this->assertStringContainsString('title: My Title', $data[1]);
        $this->assertStringContainsString('description: Description Here', $data[1]);
        $this->assertStringContainsString('Blog post body here', $data[2]);

    }
}