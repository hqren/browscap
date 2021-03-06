<?php
declare(strict_types = 1);
namespace BrowscapTest\Data;

use Browscap\Data\Platform;
use PHPUnit\Framework\TestCase;

class PlatformTest extends TestCase
{
    /**
     * tests setter and getter for the match property
     */
    public function testGetter() : void
    {
        $match      = 'TestMatchName';
        $properties = ['abc' => 'def'];

        $object = new Platform($match, $properties, true, false);

        self::assertSame($match, $object->getMatch());
        self::assertSame($properties, $object->getProperties());
        $this->assertTrue($object->isLite());
        $this->assertFalse($object->isStandard());
    }
}
