<?php
namespace FlorianWolters\Component\Core;

/**
 * The trait {@see DebugPrintTrait} provides a *Debug Print Method* for objects.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-DebugPrint
 * @since     Trait available since Release 0.1.0
 */
trait DebugPrintTrait
{
    use HashCodeTrait;

    /**
     * Returns a string representation of the object.
     *
     * In general, the {@see __toString} method returns a string that "textually
     * represents" the object using the trait {@see DebugPrintTrait}. The result
     * should be a concise but informative representation that is easy for a
     * person to read.
     *
     * The {@see __toString} method for trait {@see DebugPrintTrait} returns a
     * string consisting of the name of the class of which the object is an
     * instance, the at-sign character `@`, and the unsigned hexadecimal
     * representation of the hash code of the object. In other words, this
     * method returns a string equal to the value of:
     * /---code php
     * \get_class($this) . '@' . $this->hashCode())
     * \---
     *
     * The method {@see __toString} is intended to be used only for debugging
     * purposes, and the content and format of the returned string may vary
     * between implementations.
     *
     * The method {@see __toString} implements the *Debug Print Method*
     * implementation pattern.
     *
     * @return string The string representation.
     */
    public function __toString()
    {
        // TODO Abstract further by encapsulating the method \get_class?
        return \get_class($this) . '@' . $this->hashCode();
    }
}
