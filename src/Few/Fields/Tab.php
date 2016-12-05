<?php namespace Few\Fields;

class Tab extends Field
{
  /**
   * Field constructor.
   * @internal param $template
   */
  public function __construct()
  {
    $class = new \ReflectionClass($this);

    $slug = snake_case($class->getShortName());

    $this->template = require(__DIR__ . "/../../templates/$slug.php");
  }

  /**
   * @param $title
   * @return Group
   */
  public static function make($title)
  {
    $self = new self();
    $self->template['key'] = Key::with($title);
    $self->template['title'] = $title;
    $self->template['name'] = str_replace(' ', '', snake_case($title));
    $self->template['label'] = $title;
    return $self;
  }
}
