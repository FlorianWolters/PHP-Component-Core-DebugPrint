<?php
/**
 * FlorianWolters\Component\Core\DebugPrintCustomImpl
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-DebugPrint
 */

namespace FlorianWolters\Example;

use FlorianWolters\Component\Core\DebugPrintInterface;
use FlorianWolters\Component\Core\HashCodeTrait;

/**
 * Demonstrates the usage of a custom *Debug Print Method* implementation by
 * implementing the method {@see DebugPrintInterface::__toString}.
 *
 * @since Class available since Release 0.2.0
 */
class DebugPrintCustomImpl implements DebugPrintInterface
{
    use HashCodeTrait;

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
     * {@inheritdoc}
     */
    public function __toString()
    {
        return __CLASS__ . ':' . $this->hashCode()
            . '; $value: ' . $this->value;
    }
}
