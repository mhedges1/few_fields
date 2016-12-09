<?php

namespace spec\Few\Fields;

use Few\Fields\Number;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Number::class);
    }
}
