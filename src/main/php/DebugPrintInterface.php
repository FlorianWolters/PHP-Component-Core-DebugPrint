<?php
/**
 * FlorianWolters\Component\Core\DebugPrintInterface
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-DebugPrint
 */

namespace FlorianWolters\Component\Core;

/**
 * The interface {@see DebugPrintInterface} indicates that an implementing class
 * provides a *Debug Print Method* for objects.
 *
 * By implementing the interface {@see DebugPrintInterface} the implementing
 * class signals that it implements the *Debug Print Method* implementation
 * pattern.
 *
 * @since Interface available since Release 0.1.0
 */
interface DebugPrintInterface
{
    /**
     * Returns a string representation of an object.
     *
     * In general, the {@see __toString} method returns a string that "textually
     * represents" an object. The result should be a concise but informative
     * representation that is easy for a person to read.
     *
     * The method {@see __toString} is intended to be used only for debugging
     * purposes, and the content and format of the returned string may vary
     * between implementations.
     *
     * @return string The string representation.
     */
    public function __toString();
}
