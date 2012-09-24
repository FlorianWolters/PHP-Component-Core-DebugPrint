<?php
use FlorianWolters\Component\Core\DebugPrintInterface;

/**
 * Demonstrates the usage of a custom *Debug Print Method* implementation by
 * overriding the method {@link HashCodeTrait::_-toString} of the trait {@link
 * DebugMethodTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-DebugPrint
 * @since     Class available since Release 0.1.0
 */
class DebugPrintCustomImpl implements DebugPrintInterface
{
    /**
     * Imports the member method {@link DebugPrintTrait::__toString}.
     */
    use DebugPrintTrait;

    /**
     * The value of this object.
     *
     * @var mixed
     */
    private $value;

    /**
     * Constructs a new object with the specified value.
     *
     * @param mixed $value The value.
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Returns a string representation for this object.
     *
     * {@inheritdoc}
     *
     * @return string The string representation.
     */
    public function __toString()
    {
        return 'Object: ' . $this->hashCode() . '; $value: ' . $this->value;
    }
}
