<?php

declare(use_strict=1);

namespace Table\Enums;

enum TableColumnType: string
{
    case Data = 'td';
    case Header = 'th';
}
