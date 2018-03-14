<?php
namespace Command;
use Command\CommandInterface as Command;

class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}