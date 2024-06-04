<?php

namespace Telegram\Bot\Commands\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
final class Command
{
    public function __construct(
        public string $description,
        public array $aliases = []
    ) {
    }
}
