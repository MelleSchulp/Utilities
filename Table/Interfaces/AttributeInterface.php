<?php

declare(use_strict=1);

namespace Table\Interfaces;

interface AttributeInterface
{
    public function getName(): string;
    public function getValue(): string;
    public function setName(string $name): void;
    public function setValue(string $value): void;
}
