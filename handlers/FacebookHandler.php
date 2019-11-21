<?php

class FacebookHandler implements HandlerInterface
{
    public function supports(array $user): bool
    {
        return array_key_exists('facebookId', $user);
    }

    public function get(array $user): string
    {
        return sprintf('http://graph.facebook.com/%s/picture', $user['facebookId']);
    }
}
