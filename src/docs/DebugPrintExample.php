<?php
use FlorianWolters\Component\Core\DebugPrintInterface;

require '../../vendor/autoload.php';
require 'DebugPrintDefaultImpl.php';
require 'DebugPrintCustomImpl.php';

exit(main());

function main()
{
    demonstrateDefaultImplementation();
    demonstrateCustomImplementation();
}

function demonstrateDefaultImplementation()
{
    $first = new DebugPrintDefaultImpl;
    $second = new DebugPrintDefaultImpl;
    output($first);
    output($second);
}

function demonstrateCustomImplementation()
{
    $first = new DebugPrintCustomImpl('foo');
    $second = new DebugPrintCustomImpl('bar');
    output($first);
    output($second);
}

function output(DebugPrintInterface $obj)
{
    // Explicit call of the Debug Print Method __toString().
    writeLine($obj->__toString());
    // Implicit call of the Debug Print Method __toString().
    writeLine($obj);
}

function writeLine($text = '')
{
    echo $text . \PHP_EOL;
}
