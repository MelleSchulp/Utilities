<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Interfaces\AttributeInterface;

interface HasAttributesInterface
{
    /**
     * @return \Traversable<AttributeInterface>
     */
    public function getAttributes(): \Traversable;
    public function renderAttributes(): string;
    public function setAttributes(\Traversable $attributes): void;
}
