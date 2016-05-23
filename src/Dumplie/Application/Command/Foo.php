<?php

declare (strict_types = 1);

namespace Dumplie\Application\Command;

final class Foo
{
    /**
     * @var string
     */
    private $bar;

    /**
     * Foo constructor.
     * @param string $bar
     */
    public function __construct(string $bar)
    {
        $this->bar = $bar;
    }

    /**
     * @return string
     */
    public function bar() : string
    {
        return $this->bar;
    }
}