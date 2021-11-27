<?php

declare(use_strict=1);

namespace Table\Enums;

enum TableSectionType: string
{
    case Body = 'tbody';
    case Foot = 'tfoot';
    case Head = 'thead';
}
