<?php
/**
 * FlorianWolters\Component\Core\DebugPrintExample
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
use FlorianWolters\Example\DebugPrintCustomImpl;
use FlorianWolters\Example\DebugPrintDefaultImpl;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * The class {@see DebugPrintExample} implements a simple command line
 * application to demonstrate the component
 * **FlorianWolters\Component\Core\DebugPrint**.
 *
 * @since Class available since Release 0.2.0
 */
final class DebugPrintExample
{
    /**
     * Runs the {@see DebugPrintExample}.
     *
     * @param integer $argc The number of arguments.
     * @param array   $argv The arguments.
     *
     * @return integer Always `0`.
     */
    public static function main($argc, array $argv = array())
    {
        $self = new self;
        $self->demonstrateDefaultImplementation();
        $self->demonstrateCustomImplementation();

        return 0;
    }

    /**
     * @return void
     */
    private function demonstrateDefaultImplementation()
    {
        $first = new DebugPrintDefaultImpl;
        $second = new DebugPrintDefaultImpl;
        $this->output($first);
        $this->output($second);
    }

    /**
     * @return void
     */
    private function demonstrateCustomImplementation()
    {
        $first = new DebugPrintCustomImpl('foo');
        $second = new DebugPrintCustomImpl('bar');
        $this->output($first);
        $this->output($second);
    }

    /**
     * @param DebugPrintInterface $obj
     *
     * @return void
     */
    private function output(DebugPrintInterface $obj)
    {
        // Explicit call of the Debug Print Method __toString().
        $this->writeLine($obj->__toString());
        // Implicit call of the Debug Print Method __toString().
        $this->writeLine($obj);
    }

    /**
     * @param string $text
     *
     * @return void
     */
    private function writeLine($text = '')
    {
        echo $text . \PHP_EOL;
    }
}

exit(DebugPrintExample::main($argc, $argv));
