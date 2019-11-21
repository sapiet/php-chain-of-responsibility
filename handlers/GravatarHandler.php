<?php

class GravatarHandler implements HandlerInterface
{
    public function supports(array $user): bool
    {
        return array_key_exists('email', $user);
    }

    public function get(array $user): string
    {
        return sprintf('https://www.gravatar.com/avatar/%s', md5($user['email']));
    }
}
