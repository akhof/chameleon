<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Rectangle;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Vector2;

    final class RectangleTest extends TestCase {

        private $rect;

        /**
         * @before
         */
        public function setUp() {
            $this -> rect = new Rectangle(new Vector2(0, 0), 50, 100);
        }

        /**
         * @covers Rectangle::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("width", $this -> rect);
            $this -> assertObjectHasAttribute("height", $this -> rect);
        }

        /**
         * @covers Rectangle::getWidth
         */
        public function testGetWidth() {
            $this -> assertEquals(50, $this -> rect -> getWidth());
        }

        /**
         * @covers Rectangle::setWidth
         */
        public function testSetWidth() {
            $this -> rect -> setWidth(20);
            $this -> assertEquals(20, $this -> rect -> getWidth());
        }

        /**
         * @covers Rectangle::getHeight
         */
        public function testGetHeight() {
            $this -> assertEquals(100, $this -> rect -> getHeight());
        }

        /**
         * @covers Rectangle::setHeight
         */
        public function testSetHeight() {
            $this -> rect -> setHeight(5);
            $this -> assertEquals(5, $this -> rect -> getHeight());
        }

        /**
         * @covers Rectangle::draw
         */
        public function testDraw() {
            // TODO
            $this -> assertTrue(true);
        }
    }
?>