<?php

declare(strict_types=1);

namespace Table\Traits;

use Table\Interfaces\AttributeInterface;

trait HasAttributesTrait
{
    private \Traversable $attributes;

    public function addAttribute(AttributeInterface $attribute): void
    {
        $this->attributes[] = $attribute;
    }

    /**
     * @return \Traversable<AttributeInterface>
     */
    public function getAttributes(): \Traversable
    {
        return $this->attributes;
    }

    public function renderAttributes(): string
    {
        return implode(
            ' ',
            array_map(
                function (AttributeInterface &$attribute) {
                    return sprintf('%s="%s"', $attribute->getName(), $attribute->getValue());
                },
                (array) $this->getAttributes()
            )
        );
    }

    public function setAttributes(\Traversable $attributes): void
    {
        $this->attributes = $attributes;
    }
}
