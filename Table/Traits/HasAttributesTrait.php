<?php

declare(use_strict=1);

namespace Table\Traits;

use Interfaces\AttributeInterface;

trait HasAttributesTrait
{
    /**
     * @return \Traversable<AttributeInterface>
     */
    public function getAttributes(): \Traversable;
    public function renderAttributes(): string;
    public function setAttributes(\Traversable $attributes): void;
}
