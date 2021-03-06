<?php 
namespace Mediator;
use Mediator\ChatRoomMediatorInterface as ChatRoomMediator;

class User {
    protected $name;
    protected $chatMediator;

    public function __construct($name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        $this->chatMediator->showMessage($this, $message);
    }
}