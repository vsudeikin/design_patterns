<?php 
namespace Mediator;

interface ChatRoomMediatorInterface 
{
    public function showMessage(User $user, $message);
}