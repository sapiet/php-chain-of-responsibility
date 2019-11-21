<?php

class SelfHandler implements HandlerInterface
{
    public function supports(array $user): bool
    {
        return array_key_exists('avatar', $user);
    }

    public function get(array $user): string
    {
        return $user['avatar'];
    }
}
