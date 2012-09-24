<?php
namespace FlorianWolters\Component\Core;

/**
 * A class implements the {@link DebugPrintInterface} interface to indicate that
 * it offers a *Debug Print Method* with the name `__toString()`.
 *
 * This interface signals that the implementing class uses the *Debug Print
 * Method* implementation pattern.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-DebugPrint
 * @since     Interface available since Release 0.1.0
 */
interface DebugPrintInterface
{
    /**
     * Returns a string representation of an object.
     *
     * In general, the {@link __toString} method returns a string that
     * "textually represents" an object. The result should be a concise but
     * informative representation that is easy for a person to read.
     *
     * The method {@link __toString} is intended to be used only for debugging
     * purposes, and the content and format of the returned string may vary
     * between implementations.
     *
     * @return string The string representation.
     */
    public function __toString();
}
