<?php namespace Few\Fields;

/**
 * Class Field
 * @package Few\Fields
 */
class Field
{
    /**
     * @var mixed
     */
    public $template;

    /**
     * @param $name
     * @param $value
     */
    function __set($name, $value)
    {
        $this->template[$name] = $value;
    }
}
