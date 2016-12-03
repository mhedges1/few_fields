<?php

namespace spec\Few\Fields;

use Few\Fields\Boolean;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BooleanSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Boolean::class);
    }
}
