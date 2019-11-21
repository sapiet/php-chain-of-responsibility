<?php

class AvatarManager
{
    /**
     * @var array
     */
    private $handlers;

    public function __construct(array $handlers)
    {
        $this->handlers = $handlers;
    }

    public function getForUser(array $user)
    {
        foreach ($this->handlers as $handler) {
            if ($handler->supports($user)) {
                return $handler->get($user);
            }
        }
    }
}
