<?php declare(strict_types=1);

namespace Breux\Human;

/**
 * Class Human
 * @package Breux\Human
 */
trait SerializableTrait
{
    /**
     * Serialize
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        $getter_names = get_class_methods(get_class($this));
        $gettableAttributes = [];
        foreach ($getter_names as $key => $value) {
            if(substr($value, 0, 3) === 'get') {
                $gettableAttributes[substr($value, 3, strlen($value))] = $this->{$value}();
            }
        }
        return $gettableAttributes;
    }
}
