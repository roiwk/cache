<?php

namespace Webman\Cache;

use Closure;

class CleanUp
{
    public function __construct(protected Closure $callback)
    {

    }

    public function __destruct()
    {
        ($this->callback)();
    }

}