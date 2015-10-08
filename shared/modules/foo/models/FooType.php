<?php

namespace foo\models;

final class FooType
{
    const NONE = 0;
    const OTHER = 1;
    const ANOTHER = 2;

    public static function options()
    {
        return [
            self::NONE => 'None',
            self::OTHER => 'Other',
            self::ANOTHER => 'Another',
        ];
    }
}