<?php

namespace spec\Few\Fields;

use Few\Fields\Field;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FieldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Field::class);
    }
}
