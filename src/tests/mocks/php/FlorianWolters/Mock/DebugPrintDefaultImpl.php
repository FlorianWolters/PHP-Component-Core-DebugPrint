<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\DebugPrintInterface;
use FlorianWolters\Component\Core\DebugPrintTrait;

/**
 * Demonstrates the usage of the default *Debug Print Method* implementation
 * with the trait {@see DebugPrintTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-DebugPrint
 * @since     Class available since Release 0.2.0
 */
class DebugPrintDefaultImpl implements DebugPrintInterface
{
    /**
     * Imports the member method {@see DebugPrintTrait::__toString}.
     */
    use DebugPrintTrait;
}
