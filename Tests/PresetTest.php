<?php

namespace Bundle\MarkdownBundle\Tests;

use Bundle\MarkdownBundle\Parser\MarkdownParser as Parser;

use Bundle\MarkdownBundle\Parser\Preset as Preset;

require_once 'PHPUnit/Framework.php';
require_once __DIR__.'/../Parser/MarkdownParser.php';
require_once __DIR__.'/../Parser/Preset/Min.php';
require_once __DIR__.'/../Parser/Preset/Max.php';
require_once __DIR__.'/../Parser/Preset/Medium.php';
require_once __DIR__.'/../Parser/Preset/Light.php';

class PresetTest extends \PHPUnit_Framework_TestCase
{

    public function testMax()
    {
        $parser = new Preset\Max();

        $this->assertEquals($this->getHtml(), $parser->transform($this->getText()));
    }

    public function testMedium()
    {
        $parser = new Preset\Medium();

        $this->assertEquals($this->getHtml(), $parser->transform($this->getText()));
    }

//    public function testMin()
//    {
//        $parser = new Preset\Min();
//
//        $this->assertEquals($this->getHtml(), $parser->transform($this->getText()));
//    }

//    public function testLight()
//    {
//        $parser = new Preset\Light();
//
//        $this->assertEquals($this->getHtml(), $parser->transform($this->getText()));
//    }

    protected function getText()
    {
        return file_get_contents(__DIR__.'/fixtures/big_text.markdown');
    }

    protected function getHtml()
    {
        return file_get_contents(__DIR__.'/fixtures/big_text.html');
    }
}