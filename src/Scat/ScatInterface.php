<?php

namespace Cvar1984\Scat;

interface ScatInterface
{
    public function __construct(string $host, int $port);
    public function getMessage(): string;
    public function sendMessage(string $message): bool;
    public function __destruct();
}
