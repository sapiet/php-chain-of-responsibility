<?php

interface HandlerInterface
{
    public function supports(array $user): bool;
    public function get(array $user): string;
}
