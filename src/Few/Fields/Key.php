<?php namespace Few\Fields;

/**
 * Class Key
 * @package Danger\Fields
 */
class Key
{
  /**
   * @var array
   */
  public static $keys = [];

  /**
   * @param $title
   * @return string
   */
  public static function with($title)
  {
    $key = str_replace(' ', '', snake_case($title));

    if (!array_key_exists($key, self::$keys)) self::$keys[$key] = [];

    $count = count(self::$keys[$key]);

    self::$keys[$key][] = $count;

    return $key . '_' . $count;
  }
}
