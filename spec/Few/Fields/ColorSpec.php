<?php

namespace spec\Few\Fields;

use Few\Fields\Color;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ColorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Color::class);
    }
}
