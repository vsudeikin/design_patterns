<?php 
namespace TemplateMethod;

use TemplateMethod\Builder;

class AndroidBuilder extends Builder
{
    public function test()
    {
        echo 'Running android tests' . PHP_EOL;
    }

    public function lint()
    {
        echo 'Linting the android code' . PHP_EOL;
    }

    public function assemble()
    {
        echo 'Assembling the android build' . PHP_EOL;
    }

    public function deploy()
    {
        echo 'Deploying android build to server' . PHP_EOL;
    }
}