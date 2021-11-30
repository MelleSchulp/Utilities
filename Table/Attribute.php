<?php

declare(use_strict=1);

namespace Table;

use Table\Interfaces\AttributeInterface;

class Attribute implements AttributeInterface
{
    private string $name;
    private string $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
