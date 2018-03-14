<?php 
namespace Mediator;
use Mediator\ChatRoomMediatorInterface as ChatRoomMediator;
use Mediator\User;

class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message . PHP_EOL;
    }
}