<?php
declare(strict_types=1);

namespace ProTag;

interface SerializeableInterface
{
    public function serialize(): string;
}
