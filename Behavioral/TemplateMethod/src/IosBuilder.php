<?php 
namespace TemplateMethod;

use TemplateMethod\Builder;

class IosBuilder extends Builder
{
    public function test()
    {
        echo 'Running ios tests' . PHP_EOL;
    }

    public function lint()
    {
        echo 'Linting the ios code' . PHP_EOL;
    }

    public function assemble()
    {
        echo 'Assembling the ios build' . PHP_EOL;
    }

    public function deploy()
    {
        echo 'Deploying ios build to server' . PHP_EOL;
    }
}