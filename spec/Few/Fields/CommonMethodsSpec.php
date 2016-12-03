<?php

namespace spec\Few\Fields;

use Few\Fields\CommonMethods;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommonMethodsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CommonMethods::class);
    }
}
