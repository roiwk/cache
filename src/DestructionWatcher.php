<?php

namespace Webman\Cache;

use WeakMap;
use Closure;

class DestructionWatcher
{
    protected static WeakMap $objects;

    public static function watch(object $object, Closure $callback): void
    {
        static::$objects ??= new WeakMap();
        static::$objects[$object] = new CleanUp($callback);
    }

}