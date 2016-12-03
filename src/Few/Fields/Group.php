<?php namespace Few\Fields;

class Group extends Field
{
  /**
   * Field constructor.
   * @internal param $template
   */
  public function __construct()
  {
    $class = new \ReflectionClass($this);

    $slug = snake_case($class->getShortName());

    $this->template = require(__DIR__ . "/../templates/$slug.php");
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

  /**
   * show on various template pages
   * @param array ...$templates
   */
  public function showWithPageTemplate(...$templates)
  {
    $location = [];

    foreach ($templates as $template) {

      $location[0][] = [
        'param' => 'page_template',
        'operator' => '==',
        'value' => $template . '.php',
      ];
    }

    $this->location = $location;
  }

  /**
   * Register the Field Group
   */
  public function register()
  {
    if (!count($this->template['location'])) return;

    if (function_exists('acf_add_local_field_group')) acf_add_local_field_group($this->template);
  }

  public function showOnAllPages()
  {
    $this->location = [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ]
      ]
    ];
  }

}
