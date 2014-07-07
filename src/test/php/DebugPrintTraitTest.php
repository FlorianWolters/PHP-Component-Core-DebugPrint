<?php
/**
 * FlorianWolters\Component\Core\DebugPrintTraitTest
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
 * Test class for {@see DebugPrintTrait}.
 *
 * @since  Class available since Release 0.1.0
 * @covers FlorianWolters\Component\Core\DebugPrintTrait
 */
class DebugPrintTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The object under test.
     *
     * @var object
     */
    private $traitObject;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        $this->traitObject = $this->createObjectForTrait();
    }

    /**
     * *Creation Method* to create an object for the trait under test.
     *
     * @return object The newly created object.
     */
    private function createObjectForTrait()
    {
        $traitName = __NAMESPACE__ . '\DebugPrintTrait';

        return $this->getObjectForTrait($traitName);
    }

    /**
     * @return void
     *
     * @coversDefaultClass __toString
     * @test
     */
    public function testDebugPrintMethodOutputFormat()
    {
        $expected = '/^([0-9A-Za-z_@])+$/';
        $actual = $this->traitObject->__toString();

        $this->assertRegExp($expected, $actual);
    }
}
